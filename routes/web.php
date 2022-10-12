<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');

Route::get('/reviews/{id}', [ReviewsController::class, 'show'])->whereNumber('id')->name('reviews.show');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
