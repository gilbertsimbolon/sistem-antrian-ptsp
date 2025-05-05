<?php

namespace App\Http\Controllers\ptsp;

use Illuminate\Http\Request;
use App\Models\AntrianPojokECourt;
use App\Http\Controllers\Controller;

class MejaPojokECourtController extends Controller
{
    public function index()
    {
        $dataPojokECourt = AntrianPojokECourt::all();
        return view('ptsp.meja-pojok-e-court-ptsp', compact('dataPojokECourt'));
    }

    public function editPojokECourt($id)
    {
        $pojokECourt = AntrianPojokECourt::findOrFail($id);
        return view('ptsp.modal.meja-pojok-e-court-modal', compact('pojokECourt'));
    }

    public function update(Request $request, $id)
    {
        $pojokECourt = AntrianPojokECourt::findOrFail($id);
        $pojokECourt->update($request->all());

        return redirect()->route('meja-pojok-e-court.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $pojokECourt = AntrianPojokECourt::findOrFail($id);
        $pojokECourt->delete();

        return redirect()->route('meja-pojok-e-court.index')->with('success', 'Data berhasil dihapus.');
    }
}
