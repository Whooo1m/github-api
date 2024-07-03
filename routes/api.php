<?php


use App\Http\Controllers\GitHubApi\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/api/find',[SearchController::class, 'search']);
Route::post('/api/find',[SearchController::class, 'results']);
