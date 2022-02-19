<?php

use Illuminate\Support\Facades\Route;

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

 Route::group(['namespace' => 'Main'], function() {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'pitbox'], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function() {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Game', 'prefix' => 'games'], function() {
        Route::get('/', 'IndexController')->name('admin.game.index');
        Route::get('/create', 'CreateController')->name('admin.game.create');
        Route::post('/', 'StoreController')->name('admin.game.store');
        Route::get('/{game}/edit', 'EditController')->name('admin.game.edit');
        Route::patch('/{game}', 'UpdateController')->name('admin.game.update');
        Route::delete('/{game}', 'DeleteController')->name('admin.game.delete');
    });

    Route::group(['namespace' => 'Carousel', 'prefix' => 'carousel'], function() {
        Route::get('/', 'IndexController')->name('admin.carousel.index');
        Route::get('/create', 'CreateController')->name('admin.carousel.create');
        Route::post('/', 'StoreController')->name('admin.carousel.store');
        Route::get('/{slide}/edit', 'EditController')->name('admin.carousel.edit');
        Route::patch('/{slide}', 'UpdateController')->name('admin.carousel.update');
        Route::delete('/{slide}', 'DeleteController')->name('admin.carousel.delete');
    });

    Route::group(['namespace' => 'Event', 'prefix' => 'events'], function() {
        Route::get('/', 'IndexController')->name('admin.event.index');
        Route::get('/create', 'CreateController')->name('admin.event.create');
        Route::post('/', 'StoreController')->name('admin.event.store');
        Route::get('/{event}/edit', 'EditController')->name('admin.event.edit');
        Route::patch('/{event}', 'UpdateController')->name('admin.event.update');
        Route::delete('/{event}', 'DeleteController')->name('admin.event.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function() {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });


    Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function() {
        Route::get('/', 'IndexController')->name('admin.trash.index');
        Route::post('/restore/category/{category}', 'RestoreCategoryController')->name('admin.trash.category.restore');
        Route::post('/restore/game/{game}', 'RestoreGameController')->name('admin.trash.game.restore');
        Route::post('/restore/carousel/{slide}', 'RestoreCarouselController')->name('admin.trash.carousel.restore');
        Route::post('/destroy/carousel/{slide}', 'DestroyCarouselController')->name('admin.trash.carousel.destroy');
        Route::post('/restore/event/{event}', 'RestoreEventController')->name('admin.trash.event.restore');
        Route::post('/destroy/event/{event}', 'DestroyEventController')->name('admin.trash.event.destroy');
    });

});

Auth::routes();

