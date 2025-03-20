<?php

namespace App\Http\Controllers;

use App\Models\MejaPidana;
use Illuminate\Http\Request;

class MejaPidanaController extends Controller
{
    public function index()
    {
        $antrian_pidana = MejaPidana::all();
        return view('meja_pidana', compact('antrian_pidana'));
    }

    public function create()
    {
        $antrian_pidana = MejaPidana::all(); // Kirim variabel agar tidak error
        return view('meja_pidana', compact('antrian_pidana'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_perkara' => 'required|string|max:255',
            'nama_penggugat' => 'required|string|max:255',
            'nama_tergugat' => 'required|string|max:255',
            'kuasa_hukum_penggugat' => 'required|string|max:255',
            'kuasa_hukum_tergugat' => 'required|string|max:255',
            'ruang_sidang' => 'required|string|max:255',
            'hakim' => 'required|string|max:255',
            'panitera' => 'required|string|max:255',
            'tanggal_sidang' => 'required|date',
            'sidang_mulai' => 'required|date_format:H:i',
            'sidang_akhir' => 'required|date_format:H:i',
            'status' => 'nullable|in:menunggu,dipanggil,sukses',
        ]);

        MejaPidana::create([
            'nomor_perkara' => $request->nomor_perkara,
            'nama_penggugat' => $request->nama_penggugat,
            'nama_tergugat' => $request->nama_tergugat,
            'kuasa_hukum_penggugat' => $request->kuasa_hukum_penggugat,
            'kuasa_hukum_tergugat' => $request->kuasa_hukum_tergugat,
            'ruang_sidang' => $request->ruang_sidang,
            'hakim' => $request->hakim,
            'panitera' => $request->panitera,
            'tanggal_sidang' => $request->tanggal_sidang,
            'sidang_mulai' => $request->sidang_mulai,
            'sidang_akhir' => $request->sidang_akhir,
            'status' => $request->status ?? 'menunggu', // Tambahkan default jika kosong
        ]);

        
        

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function updateKehadiran(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:meja_pidana,id',
            'role' => 'required|in:hakim,penggugat,tergugat',
        ]);

        // Ambil data
        $antrian = MejaPidana::find($request->id);
        $field = "hadir_" . $request->role;

        // Toggle kehadiran
        $newStatus = $antrian->$field == 'hadir' ? 'tidak_hadir' : 'hadir';
        $antrian->update([$field => $newStatus]);

        return response()->json([
            'success' => true,
            'status' => $newStatus,
            'badgeClass' => $newStatus == 'hadir' ? 'bg-success' : 'bg-danger'
        ]);
    }

    public function edit($id)
    {
        $antrian_pidana = MejaPidana::findOrFail($id);
        return view('meja_pidana', compact('antrian_pidana'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_perkara' => 'required|string|max:255',
            'nama_penggugat' => 'required|string|max:255',
            'nama_tergugat' => 'required|string|max:255',
            'hakim' => 'required|string|max:255',
            'ruang_sidang' => 'required|string|max:255',
        ]);

        $antrian = MejaPidana::findOrFail($id);
        $antrian->update([
            'nomor_perkara' => $request->nomor_perkara,
            'nama_penggugat' => $request->nama_penggugat,
            'nama_tergugat' => $request->nama_tergugat,
            'hakim' => $request->hakim,
            'ruang_sidang' => $request->ruang_sidang,
        ]);

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        MejaPidana::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }

}
