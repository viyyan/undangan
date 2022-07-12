<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\WaSenderController;


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/', [HomeController::class, 'guest'])
    ->name('guest');

Route::post('/guest-submit', [HomeController::class, 'guestSubmit'])
    ->name('guest-submit');

