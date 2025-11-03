<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::getMovies();

        // return view('movies.index',
        // [
        //     'movies' => $movies
        // ]);

        $categories = collect($movies)->pluck('category')->unique()->values();
        return view('movies.index', compact('movies', 'categories'));
    }
}
