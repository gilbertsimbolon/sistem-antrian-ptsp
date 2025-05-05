<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Models\AntrianHukum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HukumController extends Controller
{
     public function index(){
        $antrianHukum = AntrianHukum::all();
        
        return view('ptsp.pegawai.hukum', compact('antrianHukum'));
    }
}
