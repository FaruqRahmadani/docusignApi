<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PelamarProses;
use App\Pelamar;
use Validator;
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
    $this->sendMailPelamar($pelamar, $state);
    return redirect()->back();
  }

  private function sendMailPelamar($pelamar, $status){
    return Mail::to($pelamar->email)->send(new PelamarProses($pelamar, $status));
  }
}
