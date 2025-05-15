<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\SpelerController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Club Routes
Route::get('/clubs', [ClubController::class, 'index']);
Route::get('/clubs/{id}', [ClubController::class, 'show']);
Route::post('/clubs', [ClubController::class, 'store']);
Route::put('/clubs/{id}', [ClubController::class, 'update']);
Route::delete('/clubs/{id}', [ClubController::class, 'destroy']);

// Speler Routes
Route::get('/spelers', [SpelerController::class, 'index']);
Route::get('/spelers/{id}', [SpelerController::class, 'show']);
Route::post('/spelers', [SpelerController::class, 'store']);
Route::put('/spelers/{id}', [SpelerController::class, 'update']);
Route::delete('/spelers/{id}', [SpelerController::class, 'destroy']);

// Optioneel: spelers per club
Route::get('/clubs/{id}/spelers', [ClubController::class, 'spelers']);
