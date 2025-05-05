<?php

namespace App\Http\Controllers\ptsp\antrian;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\AntrianPojokECourt;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AntrianPojokECourtController extends Controller
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
        $lastNumberToday = AntrianPojokECourt::whereDate('created_at', $today)->max('nomor_antrian');

        $nomorAntrianPojokECourt = $lastNumberToday ? $lastNumberToday + 1 : 1;

        $validated['nomor_antrian'] = $nomorAntrianPojokECourt;
        $validated['meja'] = 'POJOK E-COURT';

        $antrianPojokECourt = AntrianPojokECourt::create($validated); // tetap create

        $nomorPojokECourt = 'EC' . str_pad($antrianPojokECourt->nomor_antrian, 3, '0', STR_PAD_LEFT); // tampilkan pakai nomor_antrian
        $urlPojokECourt= route('antrian.pojok-e-court.show', $antrianPojokECourt->id);
        $mejaPojokECourt = $antrianPojokECourt->meja;
        $qrCodePojokECourt = QrCode::size(200)->generate($urlPojokECourt);

        return redirect()->route('antrian.index')->with([
            'modal-cetak-pojok-e-court' => true,
            'data' => $antrianPojokECourt,
            'nomor' => $nomorPojokECourt,
            'meja' => $mejaPojokECourt,
            'qrCode' => $qrCodePojokECourt,
        ]);
    }

    public function show($id)
    {
        $data = AntrianPojokECourt::findOrFail($id);
        $nomor = 'EC' . str_pad($data->nomor_antrian, 3, '0', STR_PAD_LEFT);
        $url = url('/ptsp/antrian/show/' . $data->id);
        $qrCode = QrCode::size(200)->generate($url);

        return view('ptsp.cetak.cetak-pojok-e-court', compact('data', 'nomor', 'qrCode'));
    }
}
