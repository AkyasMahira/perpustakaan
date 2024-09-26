<?php

namespace App\Http\Controllers;

use App\Models\Rakbuku;
use Illuminate\Http\Request;

class RakbukuController extends Controller
{
    
    public function index()
    {
        $rakbukus = Rakbuku::all();
        return view('rakbuku.index', compact('rakbukus'));
    }

    public function create()
    {
        return view('rakbuku.create');
    }

    public function edit($id)
    {
        $rakbukus = Rakbuku::find($id);
        return view('rakbuku.edit', compact('rakbukus'));
    }

    public function update(Request $request, $id)
    {
        $rakbukus = Rakbuku::find($id);
        $rakbukus->update($request->all());
        return redirect()->route('rakbuku.index');
    }

    public function destroy($id)
    {
        $rakbukus = Rakbuku::find($id);
        $rakbukus->delete();
        return redirect()->route('rakbuku.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_rak' => 'required',
            'nama_rak' => 'required',
        ]);
        $rakbukus = Rakbuku::create($validated);
        return redirect()->route('rakbuku.index');
    }

    
}
