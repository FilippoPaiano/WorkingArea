<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ConsoleController;

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
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');
Route::delete('/profile/destroy', [PublicController::class, 'destroy'])->name('user.destroy');

// Form che permetta a un utente di inserire il suo videopgioco preferito
 //route get -> form
 //route post -> gestione dati

 Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
 Route::post('/game/store', [GameController::class, 'store'])->name('game.store');
 Route::get('/game/index', [GameController::class, 'index'])->name('game.index');
 Route::get('/game/show/{game}', [GameController::class, 'show'])->name('game.show');
 Route::get('/game/edit/{game}', [GameController::class, 'edit'])->name('game.edit');
 Route::put('/game/update/{game}', [GameController::class, 'update'])->name('game.update');
 Route::delete('/game/destroy/{game}', [GameController::class, 'destroy'])->name('game.destroy');

 Route::get('/console/index', [ConsoleController::class, 'index'])->name('console.index');
 Route::get('/console/create', [ConsoleController::class, 'create'])->name('console.create');
 Route::post('/console/store', [ConsoleController::class, 'store'])->name('console.store');
 Route::get('/console/show/{console}/{name}', [ConsoleController::class, 'show'])->name('console.show');
 Route::get('/console/edit/{console}', [ConsoleController::class, 'edit'])->name('console.edit');
 Route::put('/console/update/{console}', [ConsoleController::class, 'update'])->name('console.update');
 Route::delete('/console/destroy/{console}', [ConsoleController::class, 'destroy'])->name('console.destroy');