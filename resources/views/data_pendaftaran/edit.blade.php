@extends('admin.layouts.master')

@section('title')
Edit Pendaftaran Siswa Baru
@endsection
@section('header')

@endsection
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h4>Edit Pendaftaran Siswa Baru</h4>
  </div>
  <a href="/data-pendaftaran" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
  <h5 align="center">FORMULIR PENERIMAAN PESERTA DIDIK BARU <br>
PONDOK PESANTREN AS-SALAM TEBO TAHUN AJARAN 2021/2022
  </h5>
  <p>No. Pendaftaran : {{$pendaftaran->no_pendaftaran}}</p>
  <hr>
  @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger">{{$error}}</div>
     @endforeach
  @endif
  <form action="/data-pendaftaran/edit/{{$pendaftaran->no_pendaftaran}}/submit" method="post">
    @csrf
  <table width="100%" class="table table-bordered">
    <tr>
      <td colspan="3"><strong>A. KETERANGAN CALON PESERTA DIDIK</strong></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;1. Nama Lengkap</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="nama_lengkap" class="form-control" value="{{$pendaftaran->nama_lengkap}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;2. Jenis Kelamin</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <select name="jenis_kelamin" class="form-control">
          <option value="">[Pilih]</option>
          <option value="Laki-laki" @if($pendaftaran->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
          <option value="Perempuan" @if($pendaftaran->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Tempat Lahir</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="tempat_lahir" class="form-control" value="{{$pendaftaran->tempat_lahir}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;4. Tanggal Lahir</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="date" class="form-control" name="tgl_lahir" value="{{$pendaftaran->tgl_lahir}}"/>
        </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Anak Ke-</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="number" name="anak_ke" class="form-control" value="{{$pendaftaran->anak_ke}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Jumlah Saudara</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="number" name="jml_saudara" class="form-control" value="{{$pendaftaran->jml_saudara}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Alamat Tempat Tinggal</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat" class="form-control" value="{{$pendaftaran->alamat}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. Jurusan</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><select class="form-control" name="jurusan" id="jurusan">
                  <option value="">[Pilih Jurusan]</option>
                  <option value="MIPA" @if($pendaftaran->jurusan == "MIPA") selected @endif>MIPA (Matematika dan Ilmu Pengetahuan Alam)</option>
                  <option value="IPS" @if($pendaftaran->jurusan == "IPS") selected @endif>IPS (Ilmu Pengetahuan Sosial)</option>
                  <option value="PK" @if($pendaftaran->jurusan == "PK") selected @endif>PK (Program Keagamaan)</option>
              </select></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. Tempat Tinggal selama bersekolah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><select class="form-control" name="tempat_tinggal" id="tempat_tinggal">
                  <option value="">[Pilih]</option>
                  <option value="Asrama" @if($pendaftaran->tempat_tinggal == "Asrama") selected @endif>Asrama</option>
                  <option value="Tidak Asrama" @if($pendaftaran->tempat_tinggal == "Tidak Asrama") selected @endif>Tidak Asrama</option>
              </select></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;10. Nama Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="sekolah_sebelumnya" class="form-control" value="{{$pendaftaran->sekolah_sebelumnya}}" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;11. Alamat Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_sekolah_sebelumnya" value="{{$pendaftaran->alamat_sekolah_sebelumnya}}" class="form-control" placeholder=""></td>
    </tr>
  </table>

  <table width="100%" class="table table-bordered">
    <tr>
      <td colspan="3"><strong>B. KETERANGAN ORANG TUA ATAU WALI</strong></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;1. Nama Lengkap</td>
      
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="nama_ayah" value="{{$pendaftaran->nama_ayah}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="nama_ibu" value="{{$pendaftaran->nama_ibu}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2. Pekerjaan</td>
      
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_ayah" value="{{$pendaftaran->pekerjaan_ayah}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_ibu" value="{{$pendaftaran->pekerjaan_ibu}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Alamat Orang Tua</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_orangtua" value="{{$pendaftaran->alamat_orangtua}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;4. Penghasilan Rata-rata Perbulan</td>
      
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <select name="penghasilan_ayah" class="form-control">
          <option value="">[Pilih]</option>
          <option value="0 - 999.999 ribu" @if($pendaftaran->penghasilan_ayah == "0 - 999.999 ribu") selected @endif>0 - 999.999 ribu </option>
          <option value="1 juta - 1.999.999 juta" @if($pendaftaran->penghasilan_ayah == "1 juta - 1.999.999 juta") selected @endif>1 juta - 1.999.999 juta  </option>
          <option value="2 juta - 4.999.999 juta" @if($pendaftaran->penghasilan_ayah == "2 juta - 4.999.999 juta") selected @endif>2 juta - 4.999.999 juta </option>
          <option value="5 juta - 10 juta" @if($pendaftaran->penghasilan_ayah == "5 juta - 10 juta") selected @endif>5 juta – 10 juta</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <select name="penghasilan_ibu" class="form-control">
          <option value="">[Pilih]</option>
          <option value="0 - 999.999 ribu" @if($pendaftaran->penghasilan_ibu == "0 - 999.999 ribu") selected @endif>0 - 999.999 ribu </option>
          <option value="1 juta - 1.999.999 juta" @if($pendaftaran->penghasilan_ibu == "1 juta - 1.999.999 juta") selected @endif>1 juta - 1.999.999 juta  </option>
          <option value="2 juta - 4.999.999 juta" @if($pendaftaran->penghasilan_ibu == "2 juta - 4.999.999 juta") selected @endif>2 juta - 4.999.999 juta </option>
          <option value="5 juta - 10 juta" @if($pendaftaran->penghasilan_ibu == "5 juta - 10 juta") selected @endif>5 juta – 10 juta</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="wali" value="{{$pendaftaran->wali}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Alamat Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_wali" value="{{$pendaftaran->alamat_wali}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Pekerjaan wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_wali" value="{{$pendaftaran->pekerjaan_wali}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. No Hp orang tua atau wali santri  </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="no_hp_ortu" value="{{$pendaftaran->no_hp_ortu}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. No WA orang tua atau wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="no_wa_ortu" value="{{$pendaftaran->no_wa_ortu}}" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td colspan="3"><div class="d-grid gap-2"><button type="submit" class="btn btn-success btn-block">Simpan</button></div></td>
    </tr>
  </table>
  </form>
</main>
@endsection