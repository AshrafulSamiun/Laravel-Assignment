<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('register', [RegisterController::class, 'show'])->name('register.show')->middleware('guest');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('login', [LoginController::class, 'show'])->name('login.show')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{category_id}/blogs', [BlogController::class, 'categoryBlogs'])
    ->name('category.blogs');

Route::get('/blogs/{blog_id}', [BlogController::class, 'display'])
    ->name('blog.display');

Route::get('/search/{slug}', [BlogController::class, 'search'])
    ->name('blog.search');

//Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    //Route::get('/category-list', [CategoryController::class, 'categoryList'])->name('category.list');
    // Route::get('/blog-list', [BlogController::class, 'blogList'])->name('blog.list');
    // Add other protected routes here
    // Example: Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    // Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

