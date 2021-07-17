<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pendaftaran_siswa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            $jml_mipa = Pendaftaran_siswa::where('jurusan','MIPA')->count();
            $jml_ips = Pendaftaran_siswa::where('jurusan','IPS')->count();
            $jml_pk = Pendaftaran_siswa::where('jurusan','PK')->count();
            return view('home',compact('jml_mipa','jml_ips','jml_pk'));
        }else{
           return view('home_siswa'); 
        }
        
    }
}
