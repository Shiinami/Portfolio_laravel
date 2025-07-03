<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\BiodataController;


Route::get('/', [portofolioController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // CRUD Portfolio
    Route::post('/portfolio', [portofolioController::class, 'store'])->name('item.store');
    Route::delete('/portfolio/{item}', [portofolioController::class, 'destroy'])->name('item.destroy');
    Route::get('/portfolio/{item}', [portofolioController::class, 'show'])->name('item.show');
    Route::patch('/portfolio/{item}', [portofolioController::class, 'update'])->name('item.update');


    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard (jika ingin dashboard khusus user login)
    Route::get('/dashboard', [portofolioController::class, 'index'])->middleware('verified')->name('dashboard');

    // Biodata
    Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
    Route::patch('/biodata/{id}', [BiodataController::class, 'update'])->name('biodata.update');
    Route::put('/biodata/{id}', [BiodataController::class, 'update']);
    Route::delete('/biodata/{id}', [BiodataController::class, 'destroy'])->name('biodata.destroy');

});
Route::get('/{view?}', [portofolioController::class, 'index'])->name('view')->where('view', 'portfolio|home');

Route::post('/contact', [App\Http\Controllers\ContacController::class, 'store'])->name('contact.store');

Route::get('/contact', [App\Http\Controllers\ContacController::class, 'index'])->name('contact.index');

require __DIR__.'/auth.php';
