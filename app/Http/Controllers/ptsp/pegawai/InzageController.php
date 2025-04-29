<?php

namespace App\Http\Controllers\ptsp\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InzageController extends Controller
{
    public function index(){
        return view('ptsp.pegawai.inzage');
    }
}
