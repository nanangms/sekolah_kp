@extends('admin.layouts.master')

@section('title')
Detail Pendaftaran Siswa Baru
@endsection
@section('header')

@endsection
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Detail Pendaftaran Siswa baru</h4>
  </div>
  <a href="/data-pendaftaran" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
<br><br>
  <div class="alert alert-info">
    <h3 align="center">Verifikasi</h3>

    <form action="/data-pendaftaran/verifikasi/{{$pendaftaran->no_pendaftaran}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Status</label>
        <select class="form-control" name="status">
          <option value="">[Pilih]</option>
          <option value="Diterima" @if($pendaftaran->status == "Diterima") selected @endif>Diterima</option>
          <option value="Ditolak" @if($pendaftaran->status == "Ditolak") selected @endif>Ditolak</option>
        </select>
        
      </div>
      <button type="submit" class="btn btn-success"> Simpan</button>
    </form>
  </div>
  <h3 align="center">FORMULIR PENERIMAAN PESERTA DIDIK BARU <br>
PONDOK PESANTREN AS-SALAM TEBO TAHUN AJARAN 2021/2022
</h3>

<p>No. Pendaftaran : {{$pendaftaran->no_pendaftaran}}</p>

<table width="100%" class="table table-bordered">
    <tr>
      <td colspan="3"><strong>A. KETERANGAN CALON PESERTA DIDIK</strong></td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;1. Nama Lengkap</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->nama_lengkap}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;2. Jenis Kelamin</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        {{$pendaftaran->jenis_kelamin}}
      </td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Tempat Lahir</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->tempat_lahir}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;4. Tanggal Lahir <i>(tahun-bulan-tanggal)</i></td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->tgl_lahir}}</td>
        
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Anak Ke-</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->anak_ke}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Jumlah Saudara</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->jml_saudara}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Alamat Tempat Tinggal</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->alamat}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. Jurusan</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->jurusan}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. Tempat Tinggal selama bersekolah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->tempat_tinggal}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;10. Nama Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->sekolah_sebelumnya}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;11. Alamat Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->alamat_sekolah_sebelumnya}}</td>
    </tr>
  </table>
<br><br>
  <table width="100%" class="table table-bordered">
    <tr>
      <td colspan="3"><strong>B. KETERANGAN ORANG TUA ATAU WALI</strong></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Nama Lengkap</td>
      
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->nama_ayah}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->nama_ibu}}</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2. Pekerjaan</td>
      
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->pekerjaan_ayah}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->pekerjaan_ibu}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Alamat Orang Tua</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->alamat_orangtua}}</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;4. Penghasilan Rata-rata Perbulan</td>
      
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        {{$pendaftaran->penghasilan_ayah}}
      </td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        {{$pendaftaran->penghasilan_ibu}}
      </td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->wali}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Alamat Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->alamat_wali}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Pekerjaan wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->pekerjaan_wali}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. No Hp orang tua atau wali santri  </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->no_hp_ortu}}</td>
    </tr>
    <tr>
      <td width="40%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. No WA orang tua atau wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>{{$pendaftaran->no_wa_ortu}}</td>
    </tr>
  </table>
  

</main>
@endsection