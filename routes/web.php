<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'homepage'])
    ->name('homepage');

Route::get('/dettaglio/{product}', [HomepageController::class, 'detail'])
    ->name('detail');

Route::post('invia-email', [HomepageController::class, 'sendemail'])
    ->name('sendemail');


Route::get('/product', [ProductController::class, 'index'])
    ->name('product.index')
    ->middleware('auth');
Route::get('/product/create', [ProductController::class, 'create'])
    ->name('product.create')
    ->middleware('auth');
Route::post('/product/store', [ProductController::class, 'store'])
    ->name('product.store')
    ->middleware('auth');
Route::get('/product/show/{product}', [ProductController::class, 'show'])
    ->name('product.show')
    ->middleware('auth');

Route::get('/area-riservata', function () {
    return view('riservata');
})->middleware('auth');
