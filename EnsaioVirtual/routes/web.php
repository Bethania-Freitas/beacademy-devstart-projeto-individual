<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnsaioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SetlistController;


Route::get('/', function () {
    return view('home/home');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');
Route::get('/ensaio', [\App\Http\Controllers\EnsaioController::class, 'index'])->name('ensaio.index');
Route::get('/show', [\App\Http\Controllers\ShowController::class, 'index'])->name('show.index');
Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.index');

