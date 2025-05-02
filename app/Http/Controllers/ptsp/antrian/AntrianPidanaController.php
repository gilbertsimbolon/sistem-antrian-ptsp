<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPidana;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianPidanaController extends Controller
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
        $lastNumberToday = AntrianPidana::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrianPidana = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianPidana;
        $validated['meja'] = 'PIDANA';

        $antrianPidana = AntrianPidana::create($validated); // tetap create

        $nomorPidana = 'PD' . str_pad($antrianPidana->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlPidana = route('antrian.pidana.show', $antrianPidana->id);
        $mejaPidana = $antrianPidana->meja;
        $qrCodePidana = QrCode::size(200)->generate($urlPidana);

        return redirect()->route('antrian.index')->with([
            'modal-cetak-pidana' => true,
            'data' => $antrianPidana,
            'nomor' => $nomorPidana,
            'meja' => $mejaPidana,
            'qrCode' => $qrCodePidana,
        ]);
    }

    public function show($id)
    {
        $data = AntrianPidana::findOrFail($id);
        $nomor = 'PD' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-pidana', compact('data', 'nomor', 'qrCode'));
    }
}
