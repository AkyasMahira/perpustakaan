<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return view('book.edit', compact('books'));
    }

    public function update(Request $request, $id)
    {
        $books = Book::find($id);
        $books->update($request->all());
        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        $books = Book::find($id);
        $books->delete();
        return redirect()->route('book.index');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'tanggal_terbit' => 'required',
        ]);
        $books = Book::create($validated);
        return redirect()->route('book.index');
    }
    
}
