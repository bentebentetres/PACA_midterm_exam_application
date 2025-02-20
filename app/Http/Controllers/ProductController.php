<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showMovies()
    {
        $theme = "Movies"; 
        $movies = [
            'Inception', 
            'The Matrix', 
            'Interstellar', 
            'The Dark Knight', 
            'Avengers: Endgame'
        ];

        return view('products', compact('theme', 'movies')); 
    }
}
