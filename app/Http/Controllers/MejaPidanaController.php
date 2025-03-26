<?php

namespace App\Http\Controllers;

use App\Models\MejaPidana;
use Illuminate\Http\Request;

class MejaPidanaController extends Controller
{
    // View index
    public function index()
    {
        $antrian_pidana = MejaPidana::all();
        return view('meja_pidana', compact('antrian_pidana'));
    }

    // membuat data baru
    public function create()
    {
        return view('meja_pidana');
    }

    // memasukkan data ke database
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

        MejaPidana::create($request->all());

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // function edit data
    public function edit($id)
    {
        $antrian_pidana = MejaPidana::findOrFail($id);
        return view('components.meja-pidana-edit', compact('antrian_pidana'));
    }

    // Update data
    public function update(Request $request, $id)
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

        $antrian = MejaPidana::find($id);
        if (!$antrian) {
            return redirect()->route('meja-pidana.index')->with('error', 'Data tidak ditemukan.');
        }

        $antrian->update($request->all());

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $antrian = MejaPidana::find($id);
        if (!$antrian) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan.'], 404);
        }

        $antrian->delete();
        return response()->json(['success' => true, 'message' => 'Data berhasil dihapus.']);
    }
}
