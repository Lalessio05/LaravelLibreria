<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $autori = Book::all();
        return BookResource::collection($autori);
    }

    public function store(Request $request)
    {
        $libro = Book::create($request->all());
        return new BookResource($libro, 201);
    }

    public function show($id)
    {
        $libro = Book::findOrFail($id);
        return new BookResource($libro);
    }

    public function update(Request $request, $id)
    {
        $libro = Book::findOrFail($id);
        $libro->update($request->all());
        return new BookResource($libro, 200);
    }

    public function destroy($id)
    {
        $libro = Book::findOrFail($id);
        $libro->delete();
        return response()->json(null, 204);
    }
}
