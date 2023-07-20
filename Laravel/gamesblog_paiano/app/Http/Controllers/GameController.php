<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function create(){
        $consoles = Console::all();
        
        return view('game.create', compact('consoles'));
    }
    
    public function store(GameRequest $request){
        //METODO SAVE --> Utilizza PHP
        // $game = new Game();
        // $game->title = $request->title;
        // $game->softwarehouse = $request->softwarehouse;
        // $game->description = $request->description;
        // $game->save();
        
        //MASS ASSIGNMENT --> Utilizza Eloquent (ORM)
        
        $game = Game::create([
            'title'=>$request->title,
            'softwarehouse'=>$request->softwarehouse,
            'description'=>$request->description,
            'user_id'=>Auth::user()->id,
        ]);
        
        if($request->cover){
            $game->update([
                'cover'=>$request->file('cover')->store('/public/covers'),
            ]);
        }
        //Se nella request è presente una scelta della select, allora lanciami la funzione attach su quel gioco con la console scelta
        if($request->console){
            $game->consoles()->attach($request->console);
        }
        
        return redirect(route('homepage'))->with('gameCreated', 'The Game has been created');
    }
    
    public function index(){
        $games = Game::all();
        
        return view('game.index', ['games' => $games]);
    }
    
    public function show(Game $game){
        return view('game.show', compact('game'));
    }
    
    public function edit(Game $game){
        $consoles = Console::all();
        
        return view('game.edit', compact('game', 'consoles'));
    }
    
    public function update(Request $request, Game $game){
        $game->update([
            'title'=>$request->title,
            'softwarehouse'=>$request->softwarehouse,
            'description'=>$request->description,
        ]);
        
        if($request->cover)
        $game->update([
            'cover'=>$request->file('cover')->store('/public/covers'),
        ]);
        
        //Se nella request è presente una scelta della select, allora lanciami la funzione attach su quel gioco con la console scelta
        if($request->console){
            $game->consoles()->attach($request->console);
        }
        
        return redirect(route('game.index'));
    }
    
    public function destroy(Game $game){
        foreach($game->consoles as $console){
            $game->consoles()->detach($console->id);
        }

        $game->delete();
        
        return redirect(route('game.index'));
    }
}
