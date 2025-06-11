<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\TournamentController;

Route::get('/tournaments', [TournamentController::class, 'index']);
Route::get('/tournaments/create', [TournamentController::class, 'create']);
Route::post('/tournaments', [TournamentController::class, 'store']);


Route::get('/hello', [TestController::class, 'hello']);

