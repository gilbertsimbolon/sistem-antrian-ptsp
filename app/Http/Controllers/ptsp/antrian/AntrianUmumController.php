<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use App\Models\AntrianUmum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianUmumController extends Controller
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
        $lastNumberToday = AntrianUmum::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrianUmum = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianUmum;
        $validated['meja'] = 'UMUM';

        $antrianUmum = AntrianUmum::create($validated); // tetap create

        $nomorUmum = 'UM' . str_pad($antrianUmum->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlUmum = route('antrian.umum.show', $antrianUmum->id);
        $mejaUmum = $antrianUmum->meja;
        $qrCodeUmum = QrCode::size(200)->generate($urlUmum);

        return redirect()->route('antrian.index')->with([
            'modal-cetak-umum' => true,
            'data' => $antrianUmum,
            'nomor' => $nomorUmum,
            'meja' => $mejaUmum,
            'qrCode' => $qrCodeUmum,
        ]);
    }

    public function show($id)
    {
        $data = AntrianUmum::findOrFail($id);
        $nomor = 'UM' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-umum', compact('data', 'nomor', 'qrCode'));
    }
}
