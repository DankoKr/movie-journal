<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::view('/', 'home');
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);