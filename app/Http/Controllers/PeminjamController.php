<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index()
    {
        $peminjams = Peminjam::all();
        return view('peminjam.index', compact('peminjams'));
    }

    public function create()
    {
        return view('peminjam.create');
    }

    public function edit($id)
    {
        $peminjams = Peminjam::find($id);
        return view('peminjam.edit', compact('peminjams'));
    }

    public function update(Request $request, $id)
    {
        $peminjams = Peminjam::find($id);
        $peminjams->update($request->all());
        return redirect()->route('peminjam.index');
    }

    public function destroy($id)
    {
        $peminjams = Peminjam::find($id);
        $peminjams->delete();
        return redirect()->route('peminjam.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'no_hp' => 'required',
        ]);
        $peminjams = Peminjam::create($validated);
        return redirect()->route('peminjam.index');
    }

}
