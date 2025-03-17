<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaPerdataController extends Controller
{
    public function index() {
        return view('meja_perdata');
    }
}
