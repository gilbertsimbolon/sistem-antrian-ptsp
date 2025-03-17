<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaUmumController extends Controller
{
    public function index() {
        return view('meja_umum');
    }
}
