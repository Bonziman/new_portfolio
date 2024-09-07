<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostsStoreController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;



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


Route::get('/', [AdminProjectController::class, 'index'])->name('welcome');
// route for the post methode on the admin page
Route::post('/admin/upload', [AdminProjectController::class, 'upload'])->name('admin.upload');
Route::post('/admin/poststore', [PostsStoreController::class, 'store'])->name('admin.store');


// admin routes protected with middleware
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminProjectController::class, 'create'])->name('admin.upload.form');
    Route::get('/admin/edit/{project}', [AdminProjectController::class, 'edit'])->name('edit');
    Route::put('/admin/update/{id}', [AdminProjectController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{project}', [AdminProjectController::class, 'delete'])->name('admin.delete');

});
// Route to display the upload form (GET)

Route::get('/services', function () {
    return view('services');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route to display project vars
Route::get('/projects/{title}', [ProjectController::class, 'show'])->name('single');

// Define the route for showing the edit form for a project


// User registration
//Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [UserController::class, 'register']);

// User login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/sendemail', [ContactFormController::class, 'sendEmail'])->name('send.email');

//Single blog post
Route::get('/blog', function () {
    
    return view('single-post');
});
// single blog post route
Route::get('/blog/{slug}', [PostsStoreController::class, 'show'])->name('blog');

// Migration route

Route::get('/run-migrations', function () {
    Artisan::call('migrate');
    return 'Migrations have been run';
});

//upload blog posts
Route::post('/admin/upload-post', 'AdminProjectController@uploadPost')->name('admin.upload.post');
// clear cash
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache cleared successfully';
});
Route::get('/composer-dump-autoload', function () {
    Artisan::call('composer:dump-autoload');
    return 'Autoload files have been reloaded.';
});
// Display the edit form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update the post
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// destroy a post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// upload post images from the editor
Route::post('/upload-image', [PostController::class, 'uploadImage'])->name('upload.image');

Route::get('/pixelpalette', [App\Http\Controllers\PixelPaletteController::class, 'index'])->name('pixelpalette');


