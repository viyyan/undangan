<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\OfficialStoreController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\InvestorController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SearchController;


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
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
 ], function()
 {
    Route::get('/', [HomeController::class, 'index'])
        ->name('home');

    Route::prefix('about-us')->group(function () {
        Route::get('/', [AboutController::class, 'vision'])
            ->name('about-us');
        Route::get('/vision-mission', [AboutController::class, 'vision'])
            ->name('about-us.vision');
        Route::get('/organization-structure', [AboutController::class, 'organization'])
            ->name('about-us.organization');
        Route::get('/shareholder-structure', [AboutController::class, 'shareholder'])
            ->name('about-us.shareholder');
        Route::get('/boards-commissioner-directors', [AboutController::class, 'board'])
            ->name('about-us.board');
        Route::get('/indonesia-management', [AboutController::class, 'idManagement'])
            ->name('about-us.id-management');
        Route::get('/audit-comitee', [AboutController::class, 'audit'])
            ->name('about-us.audit');
        Route::get('/coorporate-secretary', [AboutController::class, 'coorporate'])
            ->name('about-us.coorporate');
        Route::get('/whistle-blowing-system', [AboutController::class, 'whistle'])
            ->name('about-us.whistle');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])
            ->name('products');
        Route::get('/{slug}', [ProductController::class, 'show'])
            ->name('product');
    });

    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticleController::class, 'index'])
            ->name('articles');
        Route::get('/{slug}', [ArticleController::class, 'show'])
            ->name('article');
    });

    Route::get('/official-store', [OfficialStoreController::class, 'index'])
        ->name('official-store');

    Route::get('/investors/{category?}/{year?}', [InvestorController::class, 'index'])
        ->name('investors');

    Route::get('/investor/{investor?}', [InvestorController::class, 'show'])
        ->name('investor');

    Route::prefix('careers')->group(function () {
        Route::get('/', [CareerController::class, 'index'])
            ->name('careers');
        Route::get('/{slug}', [CareerController::class, 'show'])
            ->name('career');
    });

    Route::get('/contact-us', [ContactController::class, 'index'])
        ->name('contact-us');

    Route::get('/search', [SearchController::class, 'index'])
        ->name('search');
});
