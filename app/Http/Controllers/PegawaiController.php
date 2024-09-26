<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }   

    public function create()
    {
        return view('pegawai.create');
    }

    public function edit($id)
    {
        $pegawais = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawais'));
    }

    public function update(Request $request, $id)
    {
        $pegawais = Pegawai::find($id);
        $pegawais->update($request->all());
        return redirect()->route('pegawai.index');
    }   

    public function destroy($id)
    {
        $pegawais = Pegawai::find($id);
        $pegawais->delete();
        return redirect()->route('pegawai.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
        $pegawais = Pegawai::create($validated);
        return redirect()->route('pegawai.index');
    }

}
