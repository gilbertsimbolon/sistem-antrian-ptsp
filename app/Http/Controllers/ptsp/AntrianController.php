<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use App\Models\AntrianPidana;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianController extends Controller
{
    public function index() {
        return view('ptsp.antrian');
    }    
}
