@extends('layouts.app')
@section('content')
  <div class="container" style="min-height:700px;">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Tabel Pelamar</div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table" id="datatablePelamar" data="{!! route('pelamarDatatable') !!}" style="width:100%;">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>CV</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalPelamar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:40px;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Data Pelamar</h4>
          </div>
          <div class="modal-body">
            <dl class="row">
              <dt class="col-sm-4">Nama</dt>
              <dd class="col-sm-8"> <strong id="nama"></strong> </dd>
              <dt class="col-sm-4">Jenis Kelamin</dt>
              <dd class="col-sm-8" id="jenis_kelamin"></dd>
              <dt class="col-sm-4">Email</dt>
              <dd class="col-sm-8" id="email"></dd>
              <dt class="col-sm-4">Nomor Telepon</dt>
              <dd class="col-sm-8" id="no_telepon"></dd>
            </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
