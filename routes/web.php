<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('products');
});


Route::get('/movies', [ProductController::class, 'showMovies']);
