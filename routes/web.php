<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('create');
//Route::post('/products', [ProductController::class, 'store'])->name('store');
//Route::get('/products/{id}', [ProductController::class, 'edit'])->name('edit');
//Route::put('/products/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
