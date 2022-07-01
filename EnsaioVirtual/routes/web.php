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
Route::get('/show/{id}', [\App\Http\Controllers\ShowController::class, 'show'])->name('show.show');
Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.index');
Route::get('/setlist/{id}', [\App\Http\Controllers\SetlistController::class, 'show'])->name('setlist.show');
Route::get('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'index'])->name('rehearsal.index');
Route::get('/rehearsal/{id}', [\App\Http\Controllers\RehearsalController::class, 'show'])->name('rehearsal.show');


