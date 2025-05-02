<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianPidana;
use Illuminate\Http\Request;

class MejaPidanaController extends Controller
{
    public function index()
    {
        $dataPidana = AntrianPidana::all();
        return view('ptsp.meja-pidana-ptsp', compact('dataPidana'));
    }

    public function editPidana($id)
    {
        $pidana = AntrianPidana::findOrFail($id);
        return view('ptsp.modal.meja-pidana-modal', compact('pidana'));
    }

    public function update(Request $request, $id)
    {
        $pidana = AntrianPidana::findOrFail($id);
        $pidana->update($request->all());

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $pidana = AntrianPidana::findOrFail($id);
        $pidana->delete();

        return redirect()->route('meja-pidana.index')->with('success', 'Data berhasil dihapus.');
    }
}
