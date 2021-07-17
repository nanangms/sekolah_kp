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