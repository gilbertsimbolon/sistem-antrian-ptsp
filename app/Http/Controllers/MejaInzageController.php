<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MejaInzageController extends Controller
{
    public function index(){
        return view('meja_inzage');
    }
}
