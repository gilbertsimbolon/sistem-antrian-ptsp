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

        $nomorAntrianInzage = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianInzage; 
        $validated['meja'] = 'INZAGE';

        $antrianInzage = AntrianInzage::create($validated); // tetap create

        $nomorInzage = 'IZ' . str_pad($antrianInzage->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlInzage = route('antrian.inzage.show', $antrianInzage->id);
        $mejaInzage = $antrianInzage->meja;
        $qrCodeInzage = QrCode::size(200)->generate($urlInzage); 

        return redirect()->route('antrian.index')->with([
            'modal-cetak-inzage' => true,
            'data' => $antrianInzage,
            'nomor' => $nomorInzage,
            'meja' => $mejaInzage,
            'qrCode' => $qrCodeInzage,
        ]);
    }

    public function show($id)
    {
        $data = AntrianInzage::findOrFail($id);
        $nomor = 'IZ' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-inzage', compact('data', 'nomor', 'qrCode'));
    }
}
