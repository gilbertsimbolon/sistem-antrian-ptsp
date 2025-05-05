<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;

class MejaInzageController extends Controller
{
    // Menampilkan data + pencarian
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = AntrianInzage::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('keperluan', 'like', "%{$search}%");
            });
        }

        $dataInzage = $query->orderBy('created_at', 'desc')->get();

        return view('ptsp.meja-inzage-ptsp', compact('dataInzage'));
    }

    // Edit data
    public function editInzage($id)
    {
        $inzage = AntrianInzage::findOrFail($id);
        return view('ptsp.modal.meja-inzage-modal', compact('inzage'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $inzage = AntrianInzage::findOrFail($id);
        $inzage->update($request->all());

        return redirect()->route('meja-inzage.index')->with('success', 'Data berhasil diubah.');
    }

    // Hapus data
    public function destroy($id)
    {
        $inzage = AntrianInzage::findOrFail($id);
        $inzage->delete();

        return redirect()->route('meja-inzage.index')->with('success', 'Data berhasil dihapus.');
    }
}
