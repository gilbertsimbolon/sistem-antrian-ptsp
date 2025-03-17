<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaHukumAtauPengaduanController extends Controller
{
    public function index() {
        return view('meja_hukum_atau_pengaduan');
    }
}
