<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Carbon\Carbon;
use App\Models\AntrianUmum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UmumController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianUmum = AntrianUmum::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.umum', compact('antrianUmum'));
    }

    public function getData()
    {
        $data = AntrianUmum::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
