<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use App\Models\AntrianHukum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianHukumController extends Controller
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
        $lastNumberToday = AntrianHukum::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrianHukum = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianHukum;
        $validated['meja'] = 'HUKUM';

        $antrianHukum = AntrianHukum::create($validated); // tetap create

        $nomorHukum = 'HK' . str_pad($antrianHukum->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlHukum = route('antrian.hukum.show', $antrianHukum->id);
        $mejaHukum = $antrianHukum->meja;
        $qrCodeHukum = QrCode::size(200)->generate($urlHukum);

        return redirect()->route('antrian.index')->with([
            'modal-cetak-hukum' => true,
            'data' => $antrianHukum,
            'nomor' => $nomorHukum,
            'meja' => $mejaHukum,
            'qrCode' => $qrCodeHukum,
        ]);
    }
    
    public function show($id)
    {
        $data = AntrianHukum::findOrFail($id);
        $nomor = 'HK' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-hukum', compact('data', 'nomor', 'qrCode'));
    }
}
