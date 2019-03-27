@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Tabel Pelamar</div>
          <div class="panel-body">
            <table class="table" id="datatablePelamar" data="{!! route('pelamarDatatable') !!}" style="width:100%;">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>CV</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <td data-for="nama"></td>
                <td data-for="file_pdf"></td>
                <td data-for="status"></td>
                <td data-for="aksi"></td>
                {{-- @for ($i = 1; $i < 15; $i++)
                  <tr>
                    <td>abah sudrun</td>
                    <td> <i class="glyphicon glyphicon-duplicate"></i> </td>
                    <td> Status </td>
                    <td>
                      <button type="button" class="btn btn-default" name="button">
                        <i class="text-success glyphicon glyphicon-ok-circle"></i>
                      </button>
                      <button type="button" class="btn btn-default" name="button">
                        <i class="text-danger glyphicon glyphicon-remove-circle"></i>
                      </button>
                    </td>
                  </tr>
                @endfor --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
