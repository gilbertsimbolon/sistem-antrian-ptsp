<?php

namespace App\Http\Controllers\ptsp;

use App\Http\Controllers\Controller;
use App\Models\AntrianPerdata;
use Illuminate\Http\Request;

class MejaPerdataController extends Controller
{
    public function index()
    {
        $dataPerdata = AntrianPerdata::all();
        return view('ptsp.meja-perdata-ptsp', compact('dataPerdata'));
    }

    public function editPerdata($id)
    {
        $perdata = AntrianPerdata::findOrFail($id);
        return view('ptsp.modal.meja-perdata-modal', compact('perdata'));
    }

    public function update(Request $request, $id)
    {
        $perdata = AntrianPerdata::findOrFail($id);
        $perdata->update($request->all());

        return redirect()->route('meja-perdata.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $perdata = AntrianPerdata::findOrFail($id);
        $perdata->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
