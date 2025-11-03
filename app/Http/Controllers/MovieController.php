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

    public function category(string $slug) {
        $movies = Movie::getMovies();

        // $filteredMovies = collect($movies)->filter(function ($movie) use ($slug) {
        //     return $movie['category'] === $slug;
        // });

        // vagy rövidebben:
        $filteredMovies = collect($movies)->filter(fn($movie) => $movie['category'] === $slug);

        // ellenőrzés:
        if ($filteredMovies->isEmpty()) {
            abort(404, "Invalid category: $slug");
        }

        return view("movies.category", compact('filteredMovies', 'slug'));
    }

    public function show(int $id) {
        $movies = Movie::getMovies();

        if (!array_key_exists($id, $movies)) {
            abort(404, "Movie not found with ID: $id");
        }

        $movie = $movies[$id];

        $previousId = ($id > 1) ? $id - 1 : count($movies);

        $nextId = ($id < count($movies) - 1) ? $id + 1 : 1;

        // filmajánló: azonos kategóriájú filmek közül maximum 3 ajánlás
        $sameCategoryMovies = collect($movies)
            ->filter(fn($m, $key) => $m['category'] === $movie['category'] && $key !== $id)
            ->take(3);

        return view("movies.show", compact('movie', 'id', 'previousId', 'nextId', 'sameCategoryMovies'));
    }
}
