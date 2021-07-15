@extends('admin.layouts.master')

@section('title')
Dashboard
@endsection
@section('header')

@endsection
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Pendaftaran Siswa baru</h4>
  </div>

  <div class="alert alert-warning"><h4>Pendaftaran Telah Dikirim, sedang dalam proses Verifikasi</h4></div>
  Status Verifikasi : 
  @if($data_siswa->status == null)
    <button class="btn btn-warning">Belum Diverifikasi</button>
  @elseif($data_siswa->status == 'Diterima')
    <button class="btn btn-success">Diterima</button>
  @elseif($data_siswa->status == 'Ditolak')
    <button class="btn btn-danger">Ditolak</button>
  @endif
  <br><br>
  Cetak Formulir <a href="/cetak-formulir" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Formulir</a>

</main>
@endsection