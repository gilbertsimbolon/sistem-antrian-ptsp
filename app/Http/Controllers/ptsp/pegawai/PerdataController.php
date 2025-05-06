<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPerdata;
use App\Http\Controllers\Controller;

class PerdataController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianPerdata = AntrianPerdata::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.perdata', compact('antrianPerdata'));
    }

    public function getData()
    {
        $data = AntrianPerdata::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
