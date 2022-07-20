<?php

use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RehearsalController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SetlistController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/show', [\App\Http\Controllers\ShowController::class, 'index'])->name('show.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth'])->group(function() {
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    
    Route::delete('/show/{id}', [ShowController::class, 'destroy'])->name('show.destroy');
    Route::get('/show/{id}/edit', [ShowController::class, 'edit'])->name('show.edit');
    Route::put('/show/{id}', [ShowController::class, 'update'])->name('show.update');
    Route::post('/show', [\App\Http\Controllers\ShowController::class, 'store'])->name('show.store');
    Route::get('/show/create', [\App\Http\Controllers\ShowController::class, 'create'])->name('show.create');
    Route::get('/show/{id}', [\App\Http\Controllers\ShowController::class, 'show'])->name('show.show');
    
    Route::delete('/setlist/{id}', [SetlistController::class, 'destroy'])->name('setlist.destroy');
    Route::get('/setlist/{id}/edit', [SetlistController::class, 'edit'])->name('setlist.edit');
    Route::put('/setlist/{id}', [SetlistController::class, 'update'])->name('setlist.update');
    Route::get('/setlist', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlist.index');
    Route::post('/setlist', [\App\Http\Controllers\SetlistController::class, 'store'])->name('setlist.store');
    Route::get('/setlist/create', [\App\Http\Controllers\SetlistController::class, 'create'])->name('setlist.create');
    Route::get('/setlist/{id}', [\App\Http\Controllers\SetlistController::class, 'show'])->name('setlist.show');
    
    Route::delete('/rehearsal/{id}', [RehearsalController::class, 'destroy'])->name('rehearsal.destroy');
    Route::get('/rehearsal/{id}/edit', [RehearsalController::class, 'edit'])->name('rehearsal.edit');
    Route::put('/rehearsal/{id}', [RehearsalController::class, 'update'])->name('rehearsal.update');
    Route::get('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'index'])->name('rehearsal.index');
    Route::post('/rehearsal', [\App\Http\Controllers\RehearsalController::class, 'store'])->name('rehearsal.store');
    Route::get('/rehearsal/create', [\App\Http\Controllers\RehearsalController::class, 'create'])->name('rehearsal.create');
    Route::get('/rehearsal/{id}', [\App\Http\Controllers\RehearsalController::class, 'show'])->name('rehearsal.show');
    
    Route::get('file', [FileController::class, 'index'])->name('file');
    Route::post('file', [FileController::class, 'store'])->name('file.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});



