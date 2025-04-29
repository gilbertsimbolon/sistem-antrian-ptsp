<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;

class InzageController extends Controller
{
    public function index(){
        $antrianInzage = AntrianInzage::all();

        return view('ptsp.pegawai.inzage', compact('antrianInzage'));
    }

    public function show(){

    }
}
