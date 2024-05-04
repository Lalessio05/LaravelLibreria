<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoreController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/autori', [AutoreController::class, 'index']);
Route::post('/autori', [AutoreController::class, 'store']);
Route::get('/autori/{id}', [AutoreController::class, 'show']);
Route::put('/autori/{id}', [AutoreController::class, 'update']);
Route::delete('/autori/{id}', [AutoreController::class, 'destroy']);