<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Illuminate\Http\Request;
use App\Models\AntrianInzage;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class InzageController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianInzage = AntrianInzage::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.inzage', compact('antrianInzage'));
    }

    public function getData()
    {
        $data = AntrianInzage::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
