<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


// Admin
Route::prefix('admin')->group(function () {

    Route::get('/',                             [AdminHomeController::class, 'dashboard'])
        ->name('Admin.home.dashboard');

    Route::controller(                      AdminPostController::class)
        ->prefix('posts')
        ->name('posts.')
        ->group(function () {
            Route::get('/', 'index')->name('list');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('detail/{id}', 'detail')->name('detail');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('detail/{id}', 'detail')->name('detail');
            Route::post('delete/{id}', 'delete')->name('delete');
        });

});


// Client
Route::get('/', [HomeController::class, 'home'])->name('Client.home');

Route::get('/{slug}', [PostController::class, 'postDetail'])->name('post.detail');

Route::get('/danh-muc', [PostController::class, 'postByCategory'])->name('category.list');

Route::get('/danh-muc/{slug}', [PostController::class, 'postByCategory'])->name('category.detail');

Route::get('/search/post', [PostController::class, 'search'])->name('home.search');


Route::prefix('auth')->group(function () {
    Route::post('/signin', [SigninController::class, 'signin'])->name('auth.signin');

    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

    Route::post('/password/reset', [ResetPasswordController::class, 'showResetForm'])->name('password.update');
});

