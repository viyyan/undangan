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


Route::prefix('who-we-are')->group(function () {
    Route::get('/', [WhoWeAreController::class, 'index'])
        ->name('who-we-are');
    Route::get('/our-4-pillars', [WhoWeAreController::class, 'ourPillars'])
        ->name('our-pillars');
    Route::get('/our-people', [WhoWeAreController::class, 'ourPeople'])
        ->name('our-people');
    Route::get('/want-to-join-us', [CareerController::class, 'index'])
        ->name('careers');
});

Route::get('/career/{slug}', [CareerController::class, 'show'])
        ->name('careers.details');


Route::prefix('what-we-do')->group(function () {
    Route::get('/', [WhatWeDoController::class, 'index'])
        ->name('what-we-do');
    Route::get('/case-studies', [CaseStudyController::class, 'index'])
        ->name('case-study');
    Route::get('/case-studies/{id}', [CaseStudyController::class, 'details'])
        ->name('case-study.details');
    Route::get('/our-tools', [WhatWeDoController::class, 'ourTools'])
        ->name('our-tools');
});

Route::prefix('our-thinking')->group(function () {
    Route::get('/', [OurThinkingController::class, 'index'])
        ->name('our-thinking');
    Route::get('/{slug}', [OurThinkingController::class, 'details'])
        ->name('our-thinking.details');
});

Route::prefix('market-research')->group(function () {
    Route::get('/', [MarketResearchController::class, 'index'])
        ->name('market-research');
    Route::get('/quiz', [MarketResearchController::class, 'quiz'])
        ->name('market-research.quiz');
});

Route::get('contact-us', [ContactController::class, 'index'])
    ->name('contact-us');
