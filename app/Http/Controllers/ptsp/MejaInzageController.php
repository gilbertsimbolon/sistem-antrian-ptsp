<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianInzage;
use Illuminate\Http\Request;

class MejaInzageController extends Controller
{
    public function index() {
    $dataInzage = AntrianInzage::all();
        return view('ptsp.meja-inzage-ptsp', compact('dataInzage'));
    }

    public function editInzage($id) {
        $inzage = AntrianInzage::findOrFail($id);
        return view('ptsp.modal.meja-inzage-modal', compact('inzage'));
    }

    public function update(Request $request, $id) {
        $inzage = AntrianInzage::findOrFail($id);
        $inzage->update($request->all());

        return redirect()->route('meja-inzage.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id){
        $inzage = AntrianInzage::findOrFail($id);
        $inzage->delete();

        return redirect()->route('meja-inzage.index')->with('success', 'Data berhasil dihapus.');
    }
}
