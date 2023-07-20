<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Models\Article;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('contattaci', [PublicController::class, 'contact_us'])->name('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'contact_submit'])->name('contattaci.submit');

Route::get('/blog/index', [ArticleController::class, 'index'])->name('blog.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('blog.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('blog.store');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('blog.show');

