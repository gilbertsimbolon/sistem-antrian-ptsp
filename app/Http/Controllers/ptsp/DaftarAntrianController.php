<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;

class DaftarAntrianController extends Controller
{
    public function index(){
        return view('ptsp.daftar-antrian-ptsp');
    }

    // Di DaftarAntrianController
    public function showDaftarAntrian()
    {
        $daftarAntrian = AntrianInzage::all();  // Mengambil semua data antrian
        return view('ptsp.daftar-antrian-ptsp', compact('daftarAntrian'));  // Mengirimkan data ke view
    }
}
