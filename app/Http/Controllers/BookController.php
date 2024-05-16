<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $autori = Book::all();
        return response()->json($autori);
    }

    public function store(Request $request)
    {
        $libri = Book::create($request->all());
        return response()->json($libri, 201);
    }

    public function show($id)
    {
        $libri = Book::findOrFail($id);
        return response()->json($libri);
    }

    public function update(Request $request, $id)
    {
        $libri = Book::findOrFail($id);
        $libri->update($request->all());
        return response()->json($libri, 200);
    }

    public function destroy($id)
    {
        $libri = Book::findOrFail($id);
        $libri->delete();
        return response()->json(null, 204);
    }
}
