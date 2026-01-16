<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GeopolitiqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PsychoController;
use App\Http\Controllers\SanteController;
use App\Http\Controllers\SouveraineteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//////////////////////////
///  Routes -> thèmes ///
/////////////////////////
Route::get('geopolitique', [GeopolitiqueController::class, 'show'])->name('geopolitique');
Route::get('actualite', [ActualiteController::class, 'show'])->name('actualite');
Route::get('sante', [SanteController::class, 'show'])->name('sante');
Route::get('souverainete', [SouveraineteController::class, 'show'])->name('souverainete');
Route::get('psycho', [PsychoController::class, 'show'])->name('psycho');




//////////////////////////
///  Authentification ///
/////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


///////////////////////////////////////////
///  Routes : gestion des commentaires ///
//////////////////////////////////////////
Route::post('/comments', [CommentController::class, 'store'])
    ->name('comments.store')
    ->middleware('auth');

require __DIR__.'/auth.php';
