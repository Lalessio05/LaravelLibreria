<?php
 
namespace App\Http\Controllers;
 
use App\Models\Autore;
use Illuminate\Http\Request;
 
class AutoreController extends Controller
{
    public function index()
    {
        $autori = Autore::all();
        return response()->json($autori);
    }

    public function store(Request $request)
    {
        try{
            $payload = json_decode($request->getContent(),true);
            $autore = Autore::create($payload);
            return response()->json($autore, 201);
            
        }catch(\Exception $e0){
            if (env("APP_ENV") === "local")
                return response()->json($e0->getMessage(),412);
            else 
                return response()->json(["error"=>$e0->getMessage()],412);
        }
    }

    public function show($id)
    {
        $autore = Autore::findOrFail($id);
        return response()->json($autore);
    }

    public function update(Request $request, $id)
    {
        try{
        $autore = Autore::findOrFail($id);
        $autore->update($request->all());
        return response()->json($autore, 200);
        }
        catch(\Exception $e){
            if (env("APP_ENV") === "local")
            return response()->json($e->getMessage(),412);
        else 
            return response()->json(["error"=>$e->getMessage()],412);
        }
    }

    public function destroy($id)
    {
        $autore = Autore::findOrFail($id);
        $autore->delete();
        return response()->json(null, 204);
    }
}