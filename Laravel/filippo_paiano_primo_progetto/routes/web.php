<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokedex' , function(){
    $trainer = "Filippo";
    $username = "FreeLippu";
    $pokemons = [
        ['name'=>'Pikachu' , 'type'=>'Elettrico'],
        ['name'=>'Eevee' , 'type'=>'Normale'],
        ['name'=>'Blastoise' , 'type'=>'Acqua'],
        ['name'=>'Snorlax' , 'type'=>'Normale'],
        ['name'=>'Aipom' , 'type'=>'Normale'],
        ['name'=>'Sudowoodo' , 'type'=>'Roccia'],
    ];
    return view('pokedex' , ['trainer'=>$trainer , 'username'=>$username , 'pokemons'=>$pokemons]);
});
