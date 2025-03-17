<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaPojokECourtController extends Controller
{
    public function index() {
        return view('meja_pojok_e_court');
    }
}
