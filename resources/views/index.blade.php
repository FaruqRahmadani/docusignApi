@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Form Pendaftaran</div>
          <div class="panel-body">
            <form action="{!! route('pelamarStore') !!}" method="post" enctype="multipart/form-data">
              @if($errors->any())
                <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
              @endif
              @if (isset($success))
                <div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>
              @endif
              @csrf
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{old('nama')}}" required>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label> <br>
                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="1" @if (old('jenis_kelamin') == 1) checked @endif required>Laki - Laki</label>
                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="2" @if (old('jenis_kelamin') == 2) checked @endif required>Perempuan</label>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
              </div>
              <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" name="no_telepon" value="{{old('no_telepon')}}" required>
              </div>
              <div class="form-group">
                <label>PDF</label>
                <input type="file" class="form-control" name="file_pdf" value="{{old('file_pdf')}}" required>
              </div>
              <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
