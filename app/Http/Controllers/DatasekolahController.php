<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasekolahController extends Controller
{
    public function index()
    {
        return view('data_sekolah.index');
    }
}
