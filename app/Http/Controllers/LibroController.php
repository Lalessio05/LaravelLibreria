<?php
 
namespace App\Http\Controllers;
 
use App\Models\Libro;
use Illuminate\Http\Request;
 
class LibroController extends Controller
{
    public function index()
    {
        $autori = Libro::all();
        echo 'Aiuto';
        return response()->json($autori);
    }

    public function store(Request $request)
    {
        $libri = Libro::create($request->all());
        return response()->json($libri, 201);
    }

    public function show($id)
    {
        $libri = Libro::findOrFail($id);
        return response()->json($libri);
    }

    public function update(Request $request, $id)
    {
        $libri = Libro::findOrFail($id);
        $libri->update($request->all());
        return response()->json($libri, 200);
    }

    public function destroy($id)
    {
        $libri = Libro::findOrFail($id);
        $libri->delete();
        return response()->json(null, 204);
    }
}