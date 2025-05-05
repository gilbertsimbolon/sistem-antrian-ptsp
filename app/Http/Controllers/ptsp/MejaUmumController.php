<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianUmum;
use Illuminate\Http\Request;

class MejaUmumController extends Controller
{
    public function index()
    {
        $dataUmum = AntrianUmum::all();
        return view('ptsp.meja-umum-ptsp', compact('dataUmum'));
    }

    public function editUmum($id)
    {
        $umum = AntrianUmum::findOrFail($id);
        return view('ptsp.modal.meja-umum-modal', compact('umum'));
    }

    public function update(Request $request, $id)
    {
        $umum = AntrianUmum::findOrFail($id);
        $umum->update($request->all());

        return redirect()->route('meja-umum.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $umum = AntrianUmum::findOrFail($id);
        $umum->delete();

        return redirect()->route('meja-umum.index')->with('success', 'Data berhasil dihapus.');
    }
}
