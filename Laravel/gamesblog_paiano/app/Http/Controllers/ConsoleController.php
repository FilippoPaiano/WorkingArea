<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnSelf;

class ConsoleController extends Controller
{
    
    // C R U D
    // Create, Read, Update, Destroy
    
    //Configurazione middleware
    public function __construct(){
        $this->middleware('auth')->except('index', 'show'); //Tutte le funzioni sono protette dal middleware auth quindi posso accedere solo se sono autenticato, tutte tranne index e show.
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $consoles = Console::all();
        
        return view('console.index', compact('consoles'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $games = Game::all();

        return view('console.create', compact('games'));
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //Abbiamo Relazionato console & game
        //Dato un oggetto di classe console posso creare un oggetto di classe game ad esso relazionato
        //Dato un ogetto di classe game posso creare un oggetto di classe console ad esso relazionato
        //Lo facciamo tramite la funzione di relazione

        //Ricevo l'id del gioco dalla request
        //Con quell'id voglio recuperare dal db l'oggetto specifico
        if($request->game){
        $game = Game::find($request->game);
        $console = $game->consoles()->create([
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
        ]);
        }else{
            $console = Console::create([
                'name' => $request->name,
                'brand' => $request->brand,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
            ]);
        }
        //Recuperato l'oggetto effettivo, io voglio creare una console legata a quell'oggetto specifico
        if($request->logo)
        $console->update([
            'logo' => $request->file('logo')->store('public/logos'),
        ]);
        
        return redirect(route('console.index'))->with('consoleCreated', "Hai corretamente inserito la tua console!");
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Console  $console
    * @return \Illuminate\Http\Response
    */
    public function show(Console $console, $name = NULL)
    {
        return view('console.show', compact('console'));
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Console  $console
    * @return \Illuminate\Http\Response
    */
    public function edit(Console $console)
    {
        if($console->user_id != Auth::user()->id){
            return redirect()->back()->with('unauthorized', "Mi dispiace ma non sei autorizzato a effettuare questa operazione");
        }

        $games = Game::all();


        return view('console.edit', compact('console', 'games'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Console  $console
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Console $console) //Da un lato ha i dati che arrivano dal form (Request), dall' altro ha la console che vogliamo aggiornare
    {
        // if($request->logo){
            
            //     $console->update([
                //         'name' => $request->name,
                //         'brand' => $request->brand,
                //         'description' => $request->description,
                //         'logo' => $request->file('logo')->store('public/logos'),
                //     ]);
                // } else {
                    //     $console->update([
                        //         'name' => $request->name,
                        //         'brand' => $request->brand,
                        //         'description' => $request->description,
                        //     ]);
                        // }
                        
                        //STRINGATO
                        $console->update([
                            'name' => $request->name,
                            'brand' => $request->brand,
                            'description' => $request->description,
                        ]);
                        
                        if($request->logo){
                            $console->update([
                                'logo' => $request->file('logo')->store('public/logos'),
                            ]);
                        }
                        
                        if($request->game){
                            $console->games()->attach($request->game);
                        }
                        
                        return redirect(route('console.index'))->with('consoleUpdated', "Hai correttamente modificato la tua console preferita");
                    }
                    
                    /**
                    * Remove the specified resource from storage.
                    *
                    * @param  \App\Models\Console  $console
                    * @return \Illuminate\Http\Response
                    */
                    public function destroy(Console $console)
                    {
                        //SCIOGLIERE IL VINCOLO D'INTEGRITA' REFERENZIALE
                        //Di tutti i giochi collegati a questa specifica console, lancia la funzione di detach con l'id di ogni singolo gioco
                        foreach($console->games as $game){
                            $console->games()->detach($game->id);
                        }

                        $console->delete();

                        return redirect(route('console.index'))->with('consoleDeleted', "Hai rimosso una console!");
                    }
                }
                