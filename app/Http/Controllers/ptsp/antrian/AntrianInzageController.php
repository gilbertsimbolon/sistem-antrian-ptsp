<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianInzage;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianInzageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Cek nomor antrian terakhir hari ini
        $today = Carbon::today();
        $lastNumberToday = AntrianInzage::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrian = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrian; // disisipkan

        $antrian = AntrianInzage::create($validated); // tetap create

        $nomor = 'IZ' . str_pad($antrian->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $url = route('antrian.inzage.show', $antrian->id);
        $qrCode = QrCode::size(200)->generate($url);
        // dd('testing');

        return redirect()->route('antrian.index')->with([
            'modalCetak' => true,
            'data' => $antrian,
            'nama' => 'INZAGE',
            'nomor' => $nomor,
            'qrCode' => $qrCode,
        ]);
    }

    public function show($id)
    {
        $data = AntrianInzage::findOrFail($id);
        $nomor = 'IZ' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);
        $meja = 'INZAGE';

        return view('ptsp.cetak.cetak-inzage', compact('data', 'nomor', 'meja', 'qrCode'));
    }
}
