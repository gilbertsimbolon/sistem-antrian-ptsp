<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use App\Models\AntrianPidana;
use Illuminate\Http\Request;

class PidanaController extends Controller
{
    public function index()
    {
        $antrianPidana = AntrianPidana::all();

        return view('ptsp.pegawai.pidana', compact('antrianPidana'));
    }
}
