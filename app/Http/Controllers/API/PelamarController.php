<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Pelamar;

class PelamarController extends Controller
{
  public function datatable(){
    $query = Pelamar::query()->orderBy('created_at', 'desc');
    return Datatables::of($query)
      ->editColumn('file_pdf', function($query){
        return '<a href="'.$query->file_pdf.'" target="_blank" class="glyphicon glyphicon-duplicate"></a>';
      })
      ->editColumn('status', function($query){
        return $query->StatusText;
      })
      ->addColumn('aksi', function($query){
        return
          '
          <button type="button" class="btn btn-default" name="button">
            <i class="text-success glyphicon glyphicon-ok-circle"></i>
          </button>
          <button type="button" class="btn btn-default" name="button">
            <i class="text-danger glyphicon glyphicon-remove-circle"></i>
          </button>
          ';
      })
      ->rawColumns(['file_pdf', 'aksi'])
      ->make();
  }
}
