<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\SpelersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('spelers', SpelersController::class);
Route::get('teams/{id}/spelers', [SpelersController::class, 'index']);
Route::delete('teams/{id}/spelers', [SpelersController::class, 'destroy']);

Route::apiResource('teams', TeamsController::class)->parameters(['teams' => 'teams'])
    ->only(['index', 'show']);


Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com '], 404);
});
