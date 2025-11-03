<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [MovieController::class, 'index'])->name('movies.index');
Route::get("/movies/{category}", [MovieController::class, 'category'])->name('movies.category');
Route::get("movie/{id}", [MovieController::class, 'show'])->name('movies.show');
