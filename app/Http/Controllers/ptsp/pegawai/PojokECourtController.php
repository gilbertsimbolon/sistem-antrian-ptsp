<?php

namespace App\Http\Controllers\ptsp\pegawai;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPojokECourt;
use App\Http\Controllers\Controller;

class PojokECourtController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $antrianPojokECourt = AntrianPojokECourt::whereDate('created_at', $today)
            ->orderBy('nomor_antrian')
            ->get();

        return view('ptsp.pegawai.pojok-e-court', compact('antrianPojokECourt'));
    }

    public function getData()
    {
        $data = AntrianPojokECourt::whereDate('created_at', \Carbon\Carbon::today())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($data);
    }
}
