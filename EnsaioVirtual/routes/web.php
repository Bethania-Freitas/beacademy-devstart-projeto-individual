<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RehearsalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SetlistController;


Route::get('/', function () {
    return view('home/home');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.list');
Route::get('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'index'])->name('rehearsal.list');
Route::get('/show', [\App\Http\Controllers\ShowController::class, 'index'])->name('show.list');
Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.list');

