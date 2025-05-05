<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use App\Models\AntrianPojokECourt;
use Illuminate\Http\Request;

class PojokECourtController extends Controller
{
    public function index()
    {
        $antrianPojokECourt = AntrianPojokECourt::all();

        return view('ptsp.pegawai.pojok-e-court', compact('antrianPojokECourt'));
    }
}
