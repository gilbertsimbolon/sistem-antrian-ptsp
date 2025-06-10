<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();

        return view('main.user', compact('user'));
    }

    public function edit($id){
        $user = User::findOrFail($id);

        return view('main.user', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('user.update')->with('sukses', 'Berhasil diperbarui.');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('sukses', 'Berhasil dihapus.');
    }
}
