<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianController extends Controller
{
    public function index() {
        return view('ptsp.antrian');
    }

    public function storeInzage(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $antrian = AntrianInzage::create($validated);
        $nomor = 'IZ' . str_pad($antrian->id, 3, '0', STR_PAD_LEFT);
        // $url = 'http://192.168.116.152:8000/ptsp/antrian/show/' . $antrian->id;
        $url = route('antrian.inzage.show', $antrian->id);
        $qrCode = QrCode::size(200)->generate($url);

        return redirect()->route('antrian.index')->with([
            'modalCetak' => true,
            'data' => $antrian,
            'nomor' => $nomor,
            'qrCode' => $qrCode,
        ]);
    }

    public function showInzage($id)
    {
        $data = AntrianInzage::findOrFail($id);
        $nomor = 'IZ' . str_pad($data->id, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-inzage', compact('data', 'nomor', 'qrCode'));
    }
}
