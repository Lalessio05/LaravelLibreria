<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use App\Models\Autore; 
 
class AutoreController extends Controller
{
    public function index()
    {
        $autori = Autore::all();
        return response()->json($autori);
    }

    public function store(Request $request)
    {
        $autore = Autore::create($request->all());
        return response()->json($autore, 201);
    }

    public function show($id)
    {
        $autore = Autore::findOrFail($id);
        return response()->json($autore);
    }

    public function update(Request $request, $id)
    {
        $autore = Autore::findOrFail($id);
        $autore->update($request->all());
        return response()->json($autore, 200);
    }

    public function destroy($id)
    {
        $autore = Autore::findOrFail($id);
        $autore->delete();
        return response()->json(null, 204);
    }
}