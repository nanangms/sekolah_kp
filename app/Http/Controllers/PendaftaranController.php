<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pendaftaran_siswa;
class PendaftaranController extends Controller
{
    public function form_pendaftaran()
    {
    	$user_id = auth()->user()->id;
    	$cek = Pendaftaran_siswa::where('user_id',$user_id)->count();
    	$data_siswa = Pendaftaran_siswa::where('user_id',$user_id)->first();
    	if($cek == 0){
        	return view('pendaftaran.form');
    	}elseif($cek == 1){
    		return view('pendaftaran.berhasil',compact('data_siswa'));
    	}
    }

    public function upload_berkas()
    {
        return view('pendaftaran.upload_berkas');
    }

    public function upload_berkas_submit(Request $request)
    {
        return view('pendaftaran.upload_berkas');
    }

    public function psb_submit(Request $request){
        
        $this->validate($request,[
            'nama_lengkap'=>'required',
            'jenis_kelamin'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'bulan_lahir'=>'required',
            'tahun_lahir'=>'required',

            'anak_ke'=>'required',
            'jml_saudara'=>'required',
            'alamat'=>'required',
            'jurusan'=>'required',
            'tempat_tinggal'=>'required',
            'sekolah_sebelumnya'=>'required',
            'alamat_sekolah_sebelumnya'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'pekerjaan_ayah'=>'required',
            'pekerjaan_ibu'=>'required',
            'alamat_orangtua'=>'required',
            'penghasilan_ayah'=>'required',
            'penghasilan_ibu'=>'required',
            'wali'=>'required',
            'alamat_wali'=>'required',
            'pekerjaan_wali'=>'required',
            'no_hp_ortu'=>'required',
            'no_wa_ortu'=>'required'
        ]);
        if(auth()->user()->role == 'siswa'){
        	$user_id = auth()->user()->id;
    	}elseif(auth()->user()->role == 'admin'){
    		$user_id = 0;
    	}
        $tgl_lahir = $request->tahun_lahir.'-'.$request->bulan_lahir.'-'.$request->tgl_lahir;
        $siswa = new \App\Models\Pendaftaran_siswa;
        $siswa->user_id    				= $user_id;
        $siswa->nama_lengkap    		= $request->nama_lengkap;
        $siswa->jenis_kelamin           = $request->jenis_kelamin;
        $siswa->tempat_lahir    		= $request->tempat_lahir;
        $siswa->tgl_lahir           	= $tgl_lahir;
        $siswa->anak_ke    				= $request->anak_ke;
        $siswa->jml_saudara           	= $request->jml_saudara;
        $siswa->alamat    				= $request->alamat;
        $siswa->jurusan           		= $request->jurusan;
        $siswa->tempat_tinggal    		= $request->tempat_tinggal;
        $siswa->sekolah_sebelumnya      = $request->sekolah_sebelumnya;
        $siswa->alamat_sekolah_sebelumnya   = $request->alamat_sekolah_sebelumnya;
        $siswa->nama_ayah           	= $request->nama_ayah;
        $siswa->nama_ibu    			= $request->nama_ibu;
        $siswa->pekerjaan_ayah          = $request->pekerjaan_ayah;
        $siswa->pekerjaan_ibu    		= $request->pekerjaan_ibu;
        $siswa->alamat_orangtua         = $request->alamat_orangtua;
        $siswa->penghasilan_ayah    	= $request->penghasilan_ayah;
        $siswa->penghasilan_ibu         = $request->penghasilan_ibu;
        $siswa->wali    				= $request->wali;
        $siswa->alamat_wali           	= $request->alamat_wali;
        $siswa->pekerjaan_wali    		= $request->pekerjaan_wali;
        $siswa->no_hp_ortu           	= $request->no_hp_ortu;
        $siswa->no_wa_ortu    			= $request->no_wa_ortu;
        $siswa->save();
        
        if(auth()->user()->role == 'admin'){
        	return redirect('/data_pendaftaran')->with('sukses','Pendaftaran berhasil');
        }elseif(auth()->user()->role == 'siswa'){
        	return redirect()->back()->with('sukses','Pendaftaran berhasil');
        }
        
    }
}
