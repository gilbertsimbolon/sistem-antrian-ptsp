<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Illuminate\Http\Request;
use App\Models\AntrianInzage;
use App\Http\Controllers\Controller;

class InzageController extends Controller
{
    public function index(){
        $antrianInzage = AntrianInzage::all();
        
        return view('ptsp.pegawai.inzage', compact('antrianInzage'));
    }
}
