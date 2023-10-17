<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Buku';
        $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
        $books = Book::all();
        return view('books.index', compact('title', 'description', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|string|max:13|unique:books',
            'judul' => 'required|string',
            'halaman' => 'required|integer',
            'kategori' => 'string',
            'penerbit' => 'required|string',
        ]);

        $book = new Book([
            'isbn' => $request->input('isbn'),
            'judul' => $request->input('judul'),
            'halaman' => $request->input('halaman'),
            'kategori' => $request->input('kategori', 'uncategorized'),
            'penerbit' => $request->input('penerbit'),
        ]);

        $book->save();

        return redirect()->route('books.index')->with('success', 'Buku telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $isbn)
    {
        $request->validate([
            'judul' => 'required|string',
            'halaman' => 'required|integer',
            'kategori' => 'string',
            'penerbit' => 'required|string',
        ]);

        $book = Book::find($isbn);
        $book->isbn = $request->input('isbn');
        $book->judul = $request->input('judul');
        $book->halaman = $request->input('halaman');
        $book->kategori = $request->input('kategori', 'uncategorized');
        $book->penerbit = $request->input('penerbit');
        $book->save();

        return redirect()->route('books.index')->with('success', 'Buku telah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku telah berhasil dihapus.');
    }
}
