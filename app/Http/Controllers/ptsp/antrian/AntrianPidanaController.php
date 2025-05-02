<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPidana;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianPidanaController extends Controller
{
    public function storePidana(Request $request)
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

        $nomorAntrian = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrian; // disisipkan

        $antrian = AntrianPidana::create($validated); // tetap create

        $nomor = 'PD' . str_pad($antrian->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $url = route('antrian.pidana.show', $antrian->id);
        $qrCode = QrCode::size(200)->generate($url);

        return redirect()->route('antrian.index')->with([
            'modalCetak' => true,
            'data' => $antrian,
            'nomor' => $nomor,
            'qrCode' => $qrCode,
        ]);
    }

    public function showPidana($id)
    {
        $data = AntrianPidana::findOrFail($id);
        $nomor = 'PD' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);
        $meja = 'PIDANA';

        return view('ptsp.cetak.cetak-pidana', compact('data', 'nomor', 'meja', 'qrCode'));
    }
}
