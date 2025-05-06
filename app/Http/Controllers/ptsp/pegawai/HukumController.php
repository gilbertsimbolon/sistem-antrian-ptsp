<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Carbon\Carbon;
use App\Models\AntrianHukum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HukumController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianHukum = AntrianHukum::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.hukum', compact('antrianHukum'));
    }

    public function getData()
    {
        $data = AntrianHukum::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
