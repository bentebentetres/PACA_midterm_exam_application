<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('products');
});

use App\Http\Controllers\ProductController;

Route::get('/products/{theme}', [ProductController::class, 'showProducts']);
