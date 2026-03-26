<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PigryController;
use App\Http\Controllers\WeightController;

/* ログイン・登録 */
Route::get('/login', [PigryController::class, 'loginForm'])->name('login');
Route::post('/login', [PigryController::class, 'login']);
Route::post('/logout', [PigryController::class, 'logout'])->name('logout');

Route::get('/register', [PigryController::class, 'register'])->name('register');
Route::post('/register', [PigryController::class, 'store']);

use Illuminate\Http\Request;

Route::post('/contact/confirm', function (Request $request) {
    return view('contact_confirm', [
        'name' => $request->name,
        'gender' => $request->gender,
        'email' => $request->email,
        'tel' => $request->tel,
        'address' => $request->address,
        'building' => $request->building,
        'type' => $request->type,
        'content' => $request->content,
    ]);
});


/* ログイン後のみ */
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [WeightController::class, 'index'])->name('dashboard');

    Route::get('/weight', [WeightController::class, 'index']);

    // ★ここ重要（name追加）
    Route::get('/weight/create', [WeightController::class, 'create'])->name('weight.create');

    // ★ここも修正（name追加）
    Route::post('/weight', [WeightController::class, 'store'])->name('weight.store');

    Route::get('/weight/{id}', [WeightController::class, 'show'])->name('weight.show');
    Route::get('/weight/{id}/edit', [WeightController::class, 'edit'])->name('weight.edit');
    Route::post('/weight/{id}/update', [WeightController::class, 'update'])->name('weight.update');
    Route::post('/weight/{id}/delete', [WeightController::class, 'delete'])->name('weight.delete');

    Route::get('/contact', function () {
    return view('contact');
});

});