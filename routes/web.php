<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/projects/{id}/like', [App\Http\Controllers\ProjectController::class, 'like'])->name('projects.like');

Route::get('/projects/{project}/details', [ProjectController::class, 'details']);

Route::get('/skilldetails', function () {
    return view('skilldetails');
});

Route::get('/profiledetails', function () {
    return view('profiledetails');
});

require __DIR__.'/auth.php';
