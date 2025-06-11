<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PlayerController;

Route::get('/tournaments', [TournamentController::class, 'index']);
Route::get('/tournaments/create', [TournamentController::class, 'create']);
Route::post('/tournaments', [TournamentController::class, 'store']);

Route::get('/tournaments/{tournament}/players', [PlayerController::class, 'index'])->name('tournament.players');
Route::get('/tournaments/{tournament}/players/create', [PlayerController::class, 'create']);
Route::post('/tournaments/{tournament}/players', [PlayerController::class, 'store']);
Route::get('/hello', [TestController::class, 'hello']);

