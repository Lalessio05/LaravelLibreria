<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');





Route::middleware('auth:api')->group(function () {
    Route::get('/libri', [Controllers\LibroController::class, 'index']);
    Route::post('/libri', [Controllers\LibroController::class, 'store']);
    Route::get('/libri/{id}', [Controllers\LibroController::class, 'show']);
    Route::put('/libri/{id}', [Controllers\LibroController::class, 'update']);
    Route::delete('/libri/{id}', [Controllers\LibroController::class, 'destroy']);

    Route::get('/autori', [Controllers\AutoreController::class, 'index']);
    Route::post('/autori', [Controllers\AutoreController::class, 'store']);
    Route::get('/autori/{id}', [Controllers\AutoreController::class, 'show']);
    Route::put('/autori/{id}', [Controllers\AutoreController::class, 'update']);
    Route::delete('/autori/{id}', [Controllers\AutoreController::class, 'destroy']);

    Route::post('/users',[Controllers\UserController::class,'store']);


});
