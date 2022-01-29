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
    });

    Route::group(['namespace' => 'Trash', 'prefix' => 'trash'], function() {
        Route::get('/', 'IndexController')->name('admin.trash.index');
        Route::post('/restore/category/{category}', 'RestoreCategoryController')->name('admin.trash.category.restore');
    });

});

Auth::routes();

