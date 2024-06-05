<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\admin\Auth\AuthController;
use App\Http\Controllers\client\Auth\AuthController as ClientAuthController;
use App\Http\Controllers\Client\PageController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

// ADMIN ROUTES
Route::name('admin.')->controller(AdminPageController::class)->middleware(AuthenticateMiddleware::class)->group(function () {
    // Dashboard
    Route::get('dashboard', 'index')->name('dashboard');

    // BANNERS
    Route::get('banners', 'banner')->name('banner');
    Route::get('banner.create', 'bannerEdit')->name('banner-create');
    Route::get('banner.edit', 'bannerEdit')->name('banner-edit');

    // PRODUCTS
    Route::get('products', 'product')->name('product');
    Route::get('product.create', 'productCreate')->name('product-create');
    Route::get('product.edit', 'productEdit')->name('product-edit');

    // USERS
    Route::get('users', 'user')->name('user');
    Route::get('user.create', 'userCreate')->name('user-create');
    Route::get('user.edit', 'userEdit')->name('user-edit');
});

// ADMIN AUTH
Route::prefix('admin')->name('admin.')->controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login')->middleware(LoginMiddleware::class);
    Route::post('login', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
});

// CLIENT ROUTES
Route::name('client.')->controller(PageController::class)->group(function () {
    // HOME
    Route::get('', 'index')->name('home');
    Route::get('home', 'index')->name('home');

    // MEN
    Route::get('collection/men', 'men')->name('collection.men');

    // WOMEN
    Route::get('collection/women', 'women')->name('collection.women');

    // PRODUCT
    Route::get('product', 'product')->name('product');

    // BLOG
    Route::get('blog', 'blog')->name('blog');

    // ABOUT
    Route::get('about', 'about')->name('about');

    // CONTACT
    Route::get('contact', 'contact')->name('contact');

    // CART
    Route::get('cart', 'cart')->name('cart');

    // CHECKOUT
    Route::get('checkout', 'checkout')->name('checkout');
});

// CLIENT AUTH
Route::name('client.')->controller(ClientAuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('store', 'store')->name('store');
    Route::post('login', 'login')->name('login.post');
    Route::get('logout', 'logout')->name('logout');
}); 



