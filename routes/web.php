<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

Route::view('/', 'home');
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);

// Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])
//      ->middleware('auth')
//      ->can('edit', 'movie');

// Route::patch('/movies/{movie}', [MovieController::class, 'update']);
// Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);