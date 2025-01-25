<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenerateTransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Geração de transações
    Route::get('/generate_transaction', [GenerateTransactionController::class, 'get'])->name('generate_transaction.get');
    Route::post('/generate_transaction/post', [GenerateTransactionController::class, 'post'])->name('generate_transaction.post');
    Route::delete('/generate_transaction/destroy', [GenerateTransactionController::class, 'destroy'])->name('generate_transaction.delete');
});

require __DIR__.'/auth.php';