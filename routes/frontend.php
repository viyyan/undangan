<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\WhoWeAreController;
use App\Http\Controllers\Frontend\WhatWeDoController;
use App\Http\Controllers\Frontend\CaseStudyController;
use App\Http\Controllers\Frontend\OurThinkingController;
use App\Http\Controllers\Frontend\MarketResearchController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CareerController;


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


Route::prefix('our-thinking')->group(function () {
    Route::get('/', [OurThinkingController::class, 'index'])
        ->name('our-thinking');
    Route::get('/{slug}', [OurThinkingController::class, 'details'])
        ->name('our-thinking.details');
});

Route::get('contact-us', [ContactController::class, 'index'])
    ->name('contact-us');

Route::post('contact-us', [ContactController::class, 'submitInquiry'])
    ->name('contact-us.submit');
