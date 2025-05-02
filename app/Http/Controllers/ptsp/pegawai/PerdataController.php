<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use App\Models\AntrianPerdata;
use Illuminate\Http\Request;

class PerdataController extends Controller
{
    public function index()
    {
        $antrianPerdata = AntrianPerdata::all();

        return view('ptsp.pegawai.perdata', compact('antrianPerdata'));
    }
}
