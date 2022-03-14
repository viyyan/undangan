<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ParentingTipsController;


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])
    ->name('home');


Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])
    ->name('product');
    Route::get('/sirup', [ProductController::class, 'syrup'])
        ->name('product.syrup');
    Route::get('/drop', [ProductController::class, 'drop'])
    ->name('product.drop');
    Route::get('/expectorant', [ProductController::class, 'expectorant'])
    ->name('product.expectorant');
});


Route::prefix('parenting-tips')->group(function () {
    Route::get('/', [ParentingTipsController::class, 'index'])
        ->name('parenting-tips');
    Route::get('/{slug}', [ParentingTipsController::class, 'show'])
        ->name('parenting-tips.details');
});

Route::get('/where-to-buy', [ProductController::class, 'index'])
    ->name('where-to-buy');

Route::get('contact-us', [ContactController::class, 'index'])
    ->name('contact-us');

Route::post('contact-us', [ContactController::class, 'submitInquiry'])
    ->name('contact-us.submit');
