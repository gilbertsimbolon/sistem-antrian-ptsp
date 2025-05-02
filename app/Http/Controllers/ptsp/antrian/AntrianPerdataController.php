<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPidana;
use App\Models\AntrianPerdata;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianPerdataController extends Controller
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
        $lastNumberToday = AntrianPerdata::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrianPerdata = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianPerdata;
        $validated['meja'] = 'PERDATA';

        $antrianPerdata = AntrianPerdata::create($validated); // tetap create

        $nomorPerdata = 'PT' . str_pad($antrianPerdata->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlPerdata = route('antrian.perdata.show', $antrianPerdata->id);
        $mejaPerdata = $antrianPerdata->meja;
        $qrCodePerdata = QrCode::size(200)->generate($urlPerdata);

        return redirect()->route('antrian.index')->with([
            'modal-cetak-perdata' => true,
            'data' => $antrianPerdata,
            'nomor' => $nomorPerdata,
            'meja' => $mejaPerdata,
            'qrCode' => $qrCodePerdata,
        ]);
    }

    public function show($id)
    {
        $data = AntrianPerdata::findOrFail($id);
        $nomor = 'PT' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-perdata', compact('data', 'nomor', 'qrCode'));
    }
}
