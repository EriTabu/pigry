<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PigryController;
use App\Http\Controllers\WeightController;

/* ログイン・登録 */
Route::get('/login', [PigryController::class, 'loginForm']);
Route::post('/login', [PigryController::class, 'login']);
Route::post('/logout', [PigryController::class, 'logout']);

Route::get('/register', [PigryController::class, 'register']);
Route::post('/register', [PigryController::class, 'store']);


/* ログイン後のみ */
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [WeightController::class, 'index']);
    Route::get('/weight', [WeightController::class, 'index']);
    Route::get('/weight/create', [WeightController::class, 'create']);
    Route::post('/weight', [WeightController::class, 'store']);

    Route::get('/weight/{id}', [WeightController::class, 'show']);
    Route::get('/weight/{id}/edit', [WeightController::class, 'edit']);
    Route::post('/weight/{id}/update', [WeightController::class, 'update']);
    Route::post('/weight/{id}/delete', [WeightController::class, 'delete']);

});