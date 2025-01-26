<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenerateTransactionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Geração de transações
    Route::get('/generate_transaction', [GenerateTransactionController::class, 'get'])->name('generate_transaction.get');
    Route::post('/generate_transaction/generete_Transaction', [GenerateTransactionController::class, 'generete_Transaction'])->name('generate_transaction.post');
    Route::delete('/generate_transaction/destroy_Transaction', [GenerateTransactionController::class, 'destroy_Transaction'])->name('generate_transaction.delete');
});

require __DIR__.'/auth.php';