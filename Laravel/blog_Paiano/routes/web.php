<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WorkerController;

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
Route::get('/contattaci', [PublicController::class, 'contact_us'])->name('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'contact_submit'])->name('contattaci.submit');

Route::get('/chi-siamo', [WorkerController::class, 'worker_index'])->name('chi-siamo');