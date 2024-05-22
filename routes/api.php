<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::middleware('auth:api')->group(function () {
    Route::get('/libri', [Controllers\BookController::class, 'index']);
    Route::post('/libri', [Controllers\BookController::class, 'store']);
    Route::get('/libri/{id}', [Controllers\BookController::class, 'show']);
    Route::put('/libri/{id}', [Controllers\BookController::class, 'update']);
    Route::delete('/libri/{id}', [Controllers\BookController::class, 'destroy']);

    Route::get('/autori', [Controllers\AuthorController::class, 'index']);
    Route::post('/autori', [Controllers\AuthorController::class, 'store']);
    Route::get('/autori/{id}', [Controllers\AuthorController::class, 'show']);
    Route::put('/autori/{id}', [Controllers\AuthorController::class, 'update']);
    Route::delete('/autori/{id}', [Controllers\AuthorController::class, 'destroy']);

    Route::get('/countries', [Controllers\CountryController::class, 'index']);
});
Route::post('/users', [Controllers\UserController::class, 'store']);

