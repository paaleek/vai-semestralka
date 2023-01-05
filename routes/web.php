<?php

use App\Http\Controllers\AdminCarouselController;
use App\Http\Controllers\AdminForumController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminReviewsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Settings\ProfileController;
use App\Http\Controllers\WelcomeController;
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

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/reviews/create', [AdminReviewsController::class, 'create'])->name('admin.reviews.create');

    Route::controller(AdminReviewsController::class)->name('admin.reviews.')->group(function () {
        Route::get('/admin/reviews', 'index')->name('index');
        Route::get('/admin/reviews/edit/{id}', 'edit')->name('edit');
        Route::put('/admin/reviews/update/{id}', 'update')->name('update');
        Route::delete('/admin/reviews/delete/{id}', 'destroy')->name('destroy');
        //Route::get('/admin/reviews/create', 'create')->name('create');
        Route::put('/admin/reviews/store', 'store')->name('store');
    });

    Route::get('/admin/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');

    Route::controller(AdminNewsController::class)->name('admin.news.')->group( function() {
        Route::get('/admin/news', 'index')->name('index');
        Route::get('/admin/news/edit/{id}', 'edit')->name('edit');
        Route::put('/admin/news/update/{id}', 'update')->name('update');
        Route::delete('/admin/news/delete/{id}', 'destroy')->name('destroy');
        Route::put('/admin/news/store', 'store')->name('store');
    });

    Route::get('/admin/carousel/create', [AdminCarouselController::class, 'create'])->name('admin.carousel.create');

    Route::controller(AdminCarouselController::class)->name('admin.carousel.')->group( function() {
        Route::get('/admin/carousel', 'index')->name('index');
        Route::get('/admin/carousel/edit/{id}', 'edit')->name('edit');
        Route::put('/admin/carousel/update/{id}', 'update')->name('update');
        Route::delete('/admin/carousel/delete/{id}', 'destroy')->name('destroy');
        Route::put('/admin/carousel/store', 'store')->name('store');
    });

    Route::controller(AdminForumController::class)->name('admin.forum.')->group(function() {
        Route::get('/admin/forum', 'index')->name('index');
        Route::get('/admin/forum/edit/{id}', 'edit')->name('edit');
        Route::put('/admin/forum/update/{id}', 'update')->name('update');
        Route::delete('admin/forum/delete/{id}', 'destroy')->name('destroy');
        Route::delete('admin/forum/replies/delete/{id}', 'destroyReply')->name('destroy_reply');
        Route::get('/admin/forum/show_replies/{id}', 'showReplies')->name('show_replies');
    });
});

Route::get('/forums', [ForumsController::class, 'index'])->name('forums');

Route::middleware(['auth'])->group( function() {
    Route::get('/settings/profile-information', ProfileController::class)->name('user-profile-information.edit');

    Route::get('/forums/create', [ForumsController::class, 'create'])->name('forums.create');
    Route::put('/forums/store', [ForumsController::class, 'store'])->name('forums.store');
    Route::put('/forums/store_reply/{forum_id}', [ForumsController::class, 'store_reply'])->whereNumber('forum_id')->name('forums.store_reply');
});

Route::get('/forums/{id}', [ForumsController::class, 'show'])->whereNumber('id')->name('forums.show');

Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::get('search', [ReviewsController::class, 'search'])->name('search');

Route::get('/reviews/{id}', [ReviewsController::class, 'show'])->whereNumber('id')->name('reviews.show');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])->whereNumber('id')->name('news.show');

//Route::resource('/admin/reviews', AdminReviewsController::class)->names('admin.reviews');



//Route::get('/admin/reviews',[AdminReviewsController::class, 'index'])->name('admin.reviews.index');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
