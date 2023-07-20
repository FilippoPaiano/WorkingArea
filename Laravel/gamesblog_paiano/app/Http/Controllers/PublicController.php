<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function profile(){
        return view('profile');
    }

    public function destroy(){
        $user_games = Auth::user()->games; //Ho creato una collezione dove sono presenti tutti i games creati dall'utente autenticato.

        $user_consoles = Auth::user()->consoles;

        //Devo ciclare tutti gli elementi creati dall' utente loggato e poi devo aggiorna il campo user_id con il valore che voglio (id: 1 -> admin di default)
        foreach($user_games as $user_game){
            $user_game->update([
                'user_id' => 1,
            ]);
        }

        foreach($user_consoles as $user_console){
            $user_console->update([
                'user_id' => 1,
            ]);
        }


        Auth::user()->delete();

        return redirect(route('homepage'))->with('userDeleted', "Ci dispiace molto perderti! Speriamo di rivederti!");
    }
}
