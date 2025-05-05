<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use App\Models\AntrianUmum;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function index()
    {
        $antrianUmum = AntrianUmum::all();

        return view('ptsp.pegawai.umum', compact('antrianUmum'));
    }
}
