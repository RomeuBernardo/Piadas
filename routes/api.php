<?php

use App\Http\Controllers\Joke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('piadas',[Joke::class,'Jokes']);
Route::post('piadas',[Joke::class,'create']);
