<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'] )->name('home');


Route::get('/products', function() {
    return view('products');
})->name('products');
