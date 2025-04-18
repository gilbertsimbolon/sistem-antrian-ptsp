<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MejaInzageController extends Controller
{
    public function index() {
        return view('ptsp.meja-inzage-ptsp');
    }
}
