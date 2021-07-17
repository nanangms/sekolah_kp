@extends('admin.layouts.master')

@section('title')
Upload Berkas
@endsection
@section('header')

@endsection
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Upload Berkas</h4>
  </div>
  <span class="text-danger">Format file : jpeg/jpg/png <br>
  Ukuran Maksimal : 2mb</span>
  <form action="/upload-berkas/submit" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="pendaftaran_siswa_id" value="{{$data_siswa->id}}">
    <input type="text" name="nama_lengkap" value="{{$data_siswa->nama_lengkap}}">
  <table width="100%" class="table table-bordered">
    <tr>
      <td>Pas Foto 3x4</td>
      <td><input type="file" name="pas_photo" required></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto Ijazah</td>
      <td><input type="file" name="foto_ijazah" required></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto Akta</td>
      <td><input type="file" name="foto_akta" required></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto KK</td>
      <td><input type="file" name="foto_kk" required></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto SKHU/STTB</td>
      <td><input type="file" name="skhu" required></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td colspan="3"><button type="submit"> Kirim</button></td>
    </tr>
  </table>
  </form>
</main>
@endsection