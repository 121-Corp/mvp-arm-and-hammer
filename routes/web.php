<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'] )->name('home');


Route::get('/products',[PageController::class,'products'])->name('products');
Route::get('/product-detail',[PageController::class,'productsDetails'])->name('product-detail');


Route::match(['get', 'post'], '/distributors',[PageController::class,'distributors'])->name('distributors');


Route::match(['get', 'post'], '/representatives',[PageController::class,'representatives'])->name('representatives');


Route::get('/contact',[PageController::class,'contact'])->name('contact');
