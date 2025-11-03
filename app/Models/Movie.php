<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // modellezzük a filmeket egy tömbbel
    public static function getMovies() {
        return [
            1 => [
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'category' => 'Sci-Fi',
                'year' => 2010,
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg'
            ],
            2 => [
                'title' => 'The Matrix',
                'director' => 'The Wachowskis',
                'category'=> 'Sci-Fi',
                'year' => 1999,
                'description'=> 'the matrix has you',
                'poster'=> 'https://m.media-amazon.com/images/I/51EG732BV3L.jpg'
            ],
            3 => [
                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'category'=> 'Sci-Fi',
                'year' => 2014,
                'description'=> 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'poster'=> 'https://upload.wikimedia.org/wikipedia/en/b/bc/Interstellar_film_poster.jpg'
            ],
            4 => [
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'category'=> 'Crime',
                'year' => 1972,
                'description'=> 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'poster'=> 'https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg'
            ],
            5 => [
                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'category'=> 'Crime',
                'year' => 1994,
                'description'=> 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'poster'=> 'https://m.media-amazon.com/images/I/71c05lTE03L._AC_SY679_.jpg'
            ]
        ];
    }
}
