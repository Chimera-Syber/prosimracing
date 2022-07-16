<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\Category;

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
Route::group(['namespace' => 'Admin', 'prefix' => 'pitbox', 'middleware' => ['auth', 'verified']], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('admin.main.index')->middleware('role:0,1');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Game', 'prefix' => 'games', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.game.index');
        Route::get('/create', 'CreateController')->name('admin.game.create');
        Route::post('/', 'StoreController')->name('admin.game.store');
        Route::get('/{game}/edit', 'EditController')->name('admin.game.edit');
        Route::patch('/{game}', 'UpdateController')->name('admin.game.update');
        Route::delete('/{game}', 'DeleteController')->name('admin.game.delete');
    });

    Route::group(['namespace' => 'Carousel', 'prefix' => 'carousel', 'middleware' => 'role:0,1'], function() {
        Route::get('/', 'IndexController')->name('admin.carousel.index');
        Route::get('/create', 'CreateController')->name('admin.carousel.create');
        Route::post('/', 'StoreController')->name('admin.carousel.store');
        Route::get('/{slide}/edit', 'EditController')->name('admin.carousel.edit');
        Route::patch('/{slide}', 'UpdateController')->name('admin.carousel.update');
        Route::delete('/{slide}', 'DeleteController')->name('admin.carousel.delete');
    });

    Route::group(['namespace' => 'Event', 'prefix' => 'events', 'middleware' => 'role:0,1'], function() {
        Route::get('/', 'IndexController')->name('admin.event.index');
        Route::get('/create', 'CreateController')->name('admin.event.create');
        Route::post('/', 'StoreController')->name('admin.event.store');
        Route::get('/{event}/edit', 'EditController')->name('admin.event.edit');
        Route::patch('/{event}', 'UpdateController')->name('admin.event.update');
        Route::delete('/{event}', 'DeleteController')->name('admin.event.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts', 'middleware' => 'role:0,1'], function() {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');

        // Upload images for EditorJS
        Route::post('/uploadimage', 'UploadImageController@imageUploadEditorJS')->name('admin.post.uploadimage');
    });

    Route::group(['namespace' => 'Comment', 'prefix' => 'comments', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.comment.index');
        Route::get('/{post}/show', 'ShowController')->name('admin.comment.show');
        Route::post('/{id}/delete', 'DeleteController')->name('admin.comment.delete');
        Route::post('/{id}/restore', 'RestoreController')->name('admin.comment.restore');
    });

    Route::group(['namespace' => 'Banner', 'prefix' => 'banners', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.banner.index');
        Route::get('/create', 'CreateController')->name('admin.banner.create');
        Route::post('/', 'StoreController')->name('admin.banner.store');
        Route::get('/{banner}/edit', 'EditController')->name('admin.banner.edit');
        Route::patch('/{banner}', 'UpdateController')->name('admin.banner.update');
        Route::delete('/{banner}', 'DeleteController')->name('admin.banner.delete');
        Route::get('/show', 'ShowController')->name('admin.banner.show');
        Route::post('/show/update', 'UpdateShowController')->name('admin.banner.updateshow');
    });

    Route::group(['namespace' => 'Footer', 'prefix' => 'footer', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.footer.index');
        Route::get('/create/{place}', 'CreateController')->name('admin.footer.create');
        Route::post('/', 'StoreController')->name('admin.footer.store');
        Route::get('/{footer}/edit', 'EditController')->name('admin.footer.edit');
        Route::patch('/{footer}', 'UpdateController')->name('admin.footer.update');
        Route::delete('/{footer}', 'DeleteController')->name('admin.footer.delete');
    });

    Route::group(['namespace' => 'Trash', 'prefix' => 'trash', 'middleware' => 'role:0'], function() {
        Route::get('/', 'IndexController')->name('admin.trash.index');
        Route::post('/restore/category/{category}', 'RestoreCategoryController')->name('admin.trash.category.restore');
        Route::post('/restore/game/{game}', 'RestoreGameController')->name('admin.trash.game.restore');
        Route::post('/restore/carousel/{slide}', 'RestoreCarouselController')->name('admin.trash.carousel.restore');
        Route::post('/destroy/carousel/{slide}', 'DestroyCarouselController')->name('admin.trash.carousel.destroy');
        Route::post('/restore/event/{event}', 'RestoreEventController')->name('admin.trash.event.restore');
        Route::post('/destroy/event/{event}', 'DestroyEventController')->name('admin.trash.event.destroy');
        Route::post('/restore/user/{user}', 'RestoreUserController')->name('admin.trash.user.restore');
        Route::post('/restore/post/{post}', 'RestorePostController')->name('admin.trash.post.restore');
        Route::post('/restore/banner/{banner}', 'RestoreBannerController')->name('admin.trash.banner.restore');
    });

});

// This must be before Main group routes
Auth::routes(['verify' => true]);

Route::group(['namespace' => 'Main'], function() {
    Route::get('/', 'IndexController')->name('main.index');
    Route::post('/posts/load_more', 'IndexController@load_more')->name('main.index.load_more');

    Route::group(['namespace' => 'Category'], function() {
        try {
            $categories = Category::all();

            foreach($categories as $category) {
                $catSlug = $category->slug;
                Route::get('/{catSlug}', 'SingleCategoryController')->name('main.category.singlecategory');
                $loadDataUrl = '/' . $category->slug . '/load_data';
                Route::post($loadDataUrl, 'SingleCategoryController@load_data')->name('main.category.posts.load_more');
            }

        } catch (Exception $e) {
            echo $e;
        }
    });

    Route::group(['namespace' => 'Post'], function() {
        Route::post('/{category:slug}/{post:slug}/comment', 'SinglePostCommentController')->name('main.post.singlepost.comment.store');
        // This must be in the last place in order
        Route::get('/{category:slug}/{post:slug}', 'SinglePostController')->name('main.post.singlepost');
    });
});



