@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Form Pendaftaran</div>
          <div class="panel-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <label class="radio-inline"><input type="radio" name="jenis_kelamin" checked>Option 1</label>
                <label class="radio-inline"><input type="radio" name="jenisKelamin">Option 2</label>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="">
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" value="">
              </div>
              <div class="form-group">
                <label>PDF</label>
                <input type="file" class="form-control" name="file_lampiran" value="">
              </div>
              <button type="button" class="btn btn-primary" name="button">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
