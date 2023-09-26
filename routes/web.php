<?php

use App\Livewire\Article;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users.index');
})->name('user.index');

Route::get('/home', function () {
    return view('home');
});
Route::get('/action', function () {
    return view('action');
});

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::get('article/{author}', Article::class)->name('article');

Route::get('hook', function () {
    return view('hook');
});


Route::get('/products', function () {
    return view('products');
});


Route::get('articles', ArticleController::class)->name('articles');

Auth::routes(['login' => false, 'register' => false]);
route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
