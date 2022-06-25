<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/home');
});

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.index');
Route::get('/ensaio', [\App\Http\Controllers\EnsaioController::class, 'index'])->name('ensaio.index');
Route::get('/show', [\App\Http\Controllers\ShowController::class, 'index'])->name('show.index');
Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.index');

