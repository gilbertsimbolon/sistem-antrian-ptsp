<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPidana;
use App\Http\Controllers\Controller;

class PidanaController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianPidana = AntrianPidana::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.pidana', compact('antrianPidana'));
    }

    public function getData()
    {
        $data = AntrianPidana::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
