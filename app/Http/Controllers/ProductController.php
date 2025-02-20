<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $movies = [
        'Inception', 'The Matrix', 'Interstellar', 'The Dark Knight', 'Avengers: Endgame'
    ];

    public function showMovies()
    {
        return view('products', ['movies' => $this->movies]);
    }
}
