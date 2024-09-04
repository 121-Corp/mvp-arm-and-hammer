<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'] )->name('home');


Route::get('/products',[PageController::class,'products'])->name('products');
