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
  <form action="/upload-berkas/submit" method="post" >
  <table width="100%" class="table table-bordered">
    <tr>
      <td>Pas Foto 3x4</td>
      <td><input type="file" name="pas_photo"></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto Ijazah</td>
      <td><input type="file" name="foto_ijazah"></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto Akta</td>
      <td><input type="file" name="foto_akta"></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto KK</td>
      <td><input type="file" name="foto_kk"></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td>Foto SKHU/STTB</td>
      <td><input type="file" name="skhu"></td>
      <td><button type="submit"> Kirim</button></td>
    </tr>
    <tr>
      <td colspan="3"><button type="submit"> Kirim</button></td>
    </tr>
  </table>
  </form>
</main>
@endsection