<?php


use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Muhammad Irfan Lutfi',
        'email' => 'irfan@polinela.ac.id',
        'image' => 'cans.jpg',
        'active' => 'about'
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//Halaman Single Post
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
        'active' => 'category'
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post By Category : $category->nama",
        'posts' => $category->posts->load('category', 'author'),
        'active' => 'blog'

    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('post', [
        'title' =>  "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        'active' => 'blog'

    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login ')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
