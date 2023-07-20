<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/library/index', [LibraryController::class, 'index'])->name('library.index');
Route::get('/library/create', [LibraryController::class, 'create'])->name('library.create');
Route::get('/library/show/{library}', [LibraryController::class, 'show'])->name('library.show');
Route::get('/library/edit/{library}', [LibraryController::class, 'edit'])->name('library.edit');