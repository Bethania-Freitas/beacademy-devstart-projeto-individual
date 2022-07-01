<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RehearsalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SetlistController;


Route::get('/', function () {
    return view('home/home');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');

Route::get('/show', [\App\Http\Controllers\ShowController::class, 'index'])->name('show.index');
Route::post('/show', [\App\Http\Controllers\ShowController::class, 'store'])->name('show.store');
Route::get('/show/create', [\App\Http\Controllers\ShowController::class, 'create'])->name('show.create');
Route::get('/show/{id}', [\App\Http\Controllers\ShowController::class, 'show'])->name('show.show');


Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.index');
Route::post('/setlist', [\App\Http\Controllers\SetlistController::class, 'store'])->name('setlist.store');
Route::get('/setlist/create', [\App\Http\Controllers\SetlistController::class, 'create'])->name('setlist.create');
Route::get('/setlist/{id}', [\App\Http\Controllers\SetlistController::class, 'show'])->name('setlist.show');


Route::get('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'index'])->name('rehearsal.index');
Route::post('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'store'])->name('rehearsal.store');
Route::get('/rehearsal/create', [\App\Http\Controllers\RehearsalController::class, 'create'])->name('rehearsal.create');
Route::get('/rehearsal/{id}', [\App\Http\Controllers\RehearsalController::class, 'show'])->name('rehearsal.show');


