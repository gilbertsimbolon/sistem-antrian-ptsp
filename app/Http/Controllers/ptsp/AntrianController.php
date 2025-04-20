<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index() {
        return view('ptsp.antrian');
    }

    public function storeInzage(Request $request) {

        $validated = $request -> validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        AntrianInzage::create([
            'nama' => $validated['nama'],
            'no_telepon' => $validated['no_telepon'],
            'keperluan' => $validated['keperluan'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
        ]);

        return redirect()->route('antrian.index')->with('success', 'Antrian berhasil ditambahkan');
    }
}
