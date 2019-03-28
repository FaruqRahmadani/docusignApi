<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PelamarProses;
use App\Pelamar;
use Validator;
use DocuSign;
use Mail;

class PelamarController extends Controller
{
  public function store(Request $request){
    $data = $request->all();
    $validator = Validator::make($request->all(), [
      'file_pdf' => 'mimes:pdf|max:5120'
    ]);
    if ($validator->fails()) return redirect()->back()->withInput()->with(['errors' => $validator->errors()]);
    $FotoName = "$request->nama.$request->_token";
    $Foto = "{$FotoName}.pdf";
    $path = $request->file_pdf->move('pdf', $Foto);
    $data['file_pdf'] = $path;
    Pelamar::create($data);
    return redirect()->back()->withInput()->with(['errors' => $validator->errors()]);
  }

  public function updateStatus($id, $state){
    $id = decrypt($id);
    $state = decrypt($state);
    $pelamar = Pelamar::findOrFail($id);
    $pelamar->update(['status' => $state]);
    if ($state == 1) $this->sendMailPelamar($pelamar, $state);
    if ($state == 3) $this->prosesSign($pelamar);
    return redirect()->back();
  }

  private function sendMailPelamar($pelamar, $status){
    return Mail::to($pelamar->email)->send(new PelamarProses($pelamar, $status));
  }

  private function prosesSign($pelamar){
    $client = DocuSign::create();
    $templateRole = $client->templateRole([
    	'email' 	=> $pelamar->email,
    	'name'  	=> $pelamar->nama,
    	'role_name' => 'Staff'
    ]);
    $envelopeDefinition = $client->envelopeDefinition([
    	'status'         => 'sent',
    	'email_subject'  => "Kontrak Kerja",
    	'template_id'    => "4d42fd24-8938-4248-8342-ff7811a1bd58",
    	'template_roles' => [
    		$templateRole
    	],
    ]);
    $envelopeOptions = $client->envelopes->createEnvelopeOptions([
			'merge_roles_on_draft' => "false"
  	]);
    try {
      $client->envelopes->createEnvelope($envelopeDefinition, $envelopeOptions);
    } catch (DocuSign\eSign\ApiException $e){
      dd("Error connecting Docusign : " . $e->getResponseBody()->errorCode . " " . $e->getResponseBody()->message);
    }
  }
}
