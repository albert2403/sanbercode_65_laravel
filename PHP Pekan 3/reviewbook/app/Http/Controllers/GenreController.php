<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', [
            'genres' => $genres,
            'title' => 'Daftar Genre',
        ]);
    }

    public function create()
    {
        return view('genre.create', [
            'title' => 'Tambah Genre Baru',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Genre::create($request->only('name', 'description'));

        return redirect()->route('genre.index')->with('success', 'Genre berhasil ditambahkan.');
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', [
            'genre' => $genre,
            'title' => 'Edit Genre',
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $genre = Genre::findOrFail($id);
        $genre->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return redirect()->route('genre.index')->with('success', 'Genre berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Genre::destroy($id);
        return redirect()->route('genre.index')->with('success', 'Genre berhasil dihapus.');
    }
}

