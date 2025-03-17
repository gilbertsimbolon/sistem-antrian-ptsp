<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaPidanaController extends Controller
{
    public function index() {
        return view('meja_pidana');
    }
}
