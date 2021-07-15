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

  <h5 align="center">FORMULIR PENERIMAAN PESERTA DIDIK BARU <br>
PONDOK PESANTREN AS-SALAM TEBO TAHUN AJARAN 2021/2022
</h5>
  <hr>
  @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger">{{$error}}</div>
     @endforeach
  @endif
  <form action="/submit-pendaftaran-siswa-baru" method="post">
    @csrf
  <table width="100%" class="table table-bordered">
    <tr>
      <td colspan="3"><strong>A. KETERANGAN CALON PESERTA DIDIK</strong></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;1. Nama Lengkap</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="nama_lengkap" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;2. Jenis Kelamin</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <select name="jenis_kelamin" class="form-control">
          <option value="">[Pilih]</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Tempat Lahir</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="tempat_lahir" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;4. Tanggal Lahir</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <div class="row">
         
          <div class="col-md-2">
              <select class="form-control select2" name="tgl_lahir" id="tgl">
                  <option value="">[Tanggal]</option>
                  <?php for($a=1; $a<=31; $a+=1){ ?>
                      <option value="{{$a}}" @if(old("tgl") == $a) selected @endif>{{$a}}</option>
                  <?php } ?>
              </select>
          </div>
          <div class="col-md-3">
              <select class="form-control select2" name="bulan_lahir" id="bulan">
                  <option value="">[Bulan]</option>
                  <option value="01" @if(old("bulan") == '01') selected @endif>Januari</option>
                  <option value="02" @if(old("bulan") == '02') selected @endif>Februari</option>
                  <option value="03" @if(old("bulan") == '03') selected @endif>Maret</option>
                  <option value="04" @if(old("bulan") == '04') selected @endif>April</option>
                  <option value="05" @if(old("bulan") == '05') selected @endif>Mei</option>
                  <option value="06" @if(old("bulan") == '06') selected @endif>Juni</option>
                  <option value="07" @if(old("bulan") == '07') selected @endif>Juli</option>
                  <option value="08" @if(old("bulan") == '08') selected @endif>Agustus</option>
                  <option value="09" @if(old("bulan") == '09') selected @endif>September</option>
                  <option value="10" @if(old("bulan") == '10') selected @endif>Oktober</option>
                  <option value="11" @if(old("bulan") == '11') selected @endif>November</option>
                  <option value="12" @if(old("bulan") == '12') selected @endif>Desember</option>
              </select>
          </div>    
          <div class="col-md-3">
              <select class="form-control select2" name="tahun_lahir" id="tahun">
                  <option value="">[Tahun]</option>
                  <?php for($i=date('Y'); $i>=date('Y')-90; $i-=1){ ?>
                  <option value="{{$i}}" @if(old("tahun") == $i) selected @endif>{{$i}}</option>
                  <?php } ?>
              </select>

          </div> 
        </div>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Anak Ke-</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="number" name="anak_ke" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Jumlah Saudara</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="number" name="jml_saudara" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Alamat Tempat Tinggal</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. Jurusan</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><select class="form-control" name="jurusan" id=jurusan">
                  <option value="">[Pilih Jurusan]</option>
                  <option value="MIPA" @if(old("jurusan") == "MIPA") selected @endif>MIPA (Matematika dan Ilmu Pengetahuan Alam)</option>
                  <option value="IPS" @if(old("jurusan") == "IPS") selected @endif>IPS (Ilmu Pengetahuan Sosial)</option>
                  <option value="PK" @if(old("jurusan") == "PK") selected @endif>PK (Program Keagamaan)</option>
              </select></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. Tempat Tinggal selama bersekolah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><select class="form-control" name="tempat_tinggal" id=tempat_tinggal">
                  <option value="">[Pilih]</option>
                  <option value="Asrama" @if(old("tempat_tinggal") == "Asrama") selected @endif>Asrama</option>
                  <option value="Tidak Asrama" @if(old("tempat_tinggal") == "Tidak Asrama") selected @endif>Tidak Asrama</option>
              </select></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;10. Nama Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="sekolah_sebelumnya" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;11. Alamat Sekolah Sebelumnya</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_sekolah_sebelumnya" class="form-control" placeholder=""></td>
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
      <td><input type="text" name="nama_ayah" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="nama_ibu" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;2. Pekerjaan</td>
      
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_ayah" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_ibu" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;3. Alamat Orang Tua</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_orangtua" class="form-control" placeholder=""></td>
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
          <option value="0 - 999.999 ribu">0 - 999.999 ribu </option>
          <option value="1 juta - 1.999.999 juta">1 juta - 1.999.999 juta  </option>
          <option value="2 juta - 4.999.999 juta">2 juta - 4.999.999 juta </option>
          <option value="5 juta - 10 juta">5 juta – 10 juta</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td>
        <select name="penghasilan_ibu" class="form-control">
          <option value="">[Pilih]</option>
          <option value="0 - 999.999 ribu">0 - 999.999 ribu </option>
          <option value="1 juta - 1.999.999 juta">1 juta - 1.999.999 juta  </option>
          <option value="2 juta - 4.999.999 juta">2 juta - 4.999.999 juta </option>
          <option value="5 juta - 10 juta">5 juta – 10 juta</option>
        </select>
      </td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;5. Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="wali" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;6. Alamat Wali Santri</td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="alamat_wali" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;7. Pekerjaan wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="pekerjaan_wali" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;8. No Hp orang tua atau wali santri  </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="no_hp_ortu" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td width="30%" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;9. No WA orang tua atau wali santri </td>
      <td width="5%" align="center" valign="middle">:</td>
      <td><input type="text" name="no_wa_ortu" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td colspan="3"><div class="d-grid gap-2"><button type="submit" class="btn btn-success btn-block">Simpan</button></div></td>
    </tr>
  </table>
  </form>
</main>
@endsection