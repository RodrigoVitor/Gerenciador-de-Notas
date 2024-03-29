<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/create', [NotaController::class, 'create'])->middleware(['auth', 'verified'])->name('create-a-task');
Route::post('/store', [NotaController::class, 'store'])->middleware(['auth', 'verified'])->name('create');
Route::post('/delete', [NotaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy');
Route::post('/update', [NotaController::class, 'update'])->middleware(['auth', 'verified'])->name('update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
