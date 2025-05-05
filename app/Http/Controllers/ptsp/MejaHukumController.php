<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianHukum;
use Illuminate\Http\Request;

class MejaHukumController extends Controller
{
    public function index()
    {
        $dataHukum = AntrianHukum::all();
        return view('ptsp.meja-hukum-ptsp', compact('dataHukum'));
    }

    public function editHukum($id)
    {
        $hukum = AntrianHukum::findOrFail($id);
        return view('ptsp.modal.meja-hukum-modal', compact('hukum'));
    }

    public function update(Request $request, $id)
    {
        $hukum = AntrianHukum::findOrFail($id);
        $hukum->update($request->all());

        return redirect()->route('meja-hukum.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $hukum = AntrianHukum::findOrFail($id);
        $hukum->delete();

        return redirect()->route('meja-hukum.index')->with('success', 'Data berhasil dihapus.');
    }
}
