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

Route::post('createRole', [LoginController::class, 'createRole']);
Route::post('createPermission', [LoginController::class, 'createPermission']);
Route::post('assignPermissionToRole', [LoginController::class, 'AssignPermissionToRole']);
Route::post('assignRoleToUser', [LoginController::class, 'AssignRoleToUser']);


// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
    Route::resource('categories', CategoryController::class);
    // Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

});



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/category/{category_id}/blogs', [BlogController::class, 'categoryBlogs'])
    ->name('category.blogs');


Route::get('/blogs/search', [BlogController::class, 'search'])
    ->name('blogs.search');


Route::get('/blogs/{blog_id}', [BlogController::class, 'display'])
    ->name('blog.display');
