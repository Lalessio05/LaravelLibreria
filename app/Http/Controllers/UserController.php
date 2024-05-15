<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

    }
    public function store(Request $request)
    {
        try{
            $payload = json_decode($request->getContent(),true);
            $payload['password'] = Hash::make($payload['password']);
            $user = User::create($payload);
            return response()->json($user, 201);

        }catch(Exception $e0){
            if (env("APP_ENV") === "local")
                return response()->json($e0->getMessage(),412);
            else
                return response()->json(["error"=>$e0->getMessage()],412);
        }
    }
}
