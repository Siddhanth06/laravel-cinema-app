<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
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


// Route to show all movies
Route::get('/api/v1/movies',[MovieController::class,'showMovies'])->middleware(['auth', 'verified'])->name('movies');

// Route to show movie description
Route::get('/api/v1/movie/{id}',[MovieController::class,'showMovie'])->middleware(['auth', 'verified'])->name('movie');

// route to add new movie
Route::get('/api/v1/movies/create',[MovieController::class,'create'])->middleware(['auth', 'verified'])->name('create');

// Post new movie data
Route::post('/store',[MovieController::class,'store'])->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
