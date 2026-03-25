<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PigryController;
use App\Http\Controllers\WeightController;

Route::get('/dashboard', [WeightController::class, 'index']);

Route::get('/weight', [WeightController::class, 'index']);

Route::get('/weight/create', [WeightController::class, 'create']);
Route::post('/weight', [WeightController::class, 'store']);

/* ここ追加（重要） */
Route::get('/weight/{id}', [WeightController::class, 'show']);

Route::get('/weight/{id}/edit', [WeightController::class, 'edit']);
Route::post('/weight/{id}/update', [WeightController::class, 'update']);
Route::post('/weight/{id}/delete', [WeightController::class, 'delete']);

Route::get('/login', function () {
    return redirect('/register');
})->name('login');

Route::get('/register', [PigryController::class, 'register']);
Route::post('/register', [PigryController::class, 'store']);