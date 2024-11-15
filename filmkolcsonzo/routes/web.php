<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Models\Film;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('new-genre', [GenreController::class, 'index'])->name('new-genre.index');
Route::post('new-genre', [GenreController::class, 'store'])->name('new-genre.store');

Route::get('new-film', [FilmController::class, 'index'])->name('new-film.index');
Route::post('new-film', [FilmController::class, 'store'])->name('new-film.store');

Route::get('films', [FilmController::class, 'films'])->name('new-film.index');


require __DIR__.'/auth.php';
