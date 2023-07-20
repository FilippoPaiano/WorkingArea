<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'logo',
        'description',
        'user_id',
    ];

    public function user(){
        //OGNI OGGETTO DI CLASSE CONSOLE ($this) PUO' ESSERE LEGATO A SOLO UN OGGETTO DI CLASSE USER
        //CONSOLE BELONGS TO USER - CONSOLE APPARTIENE A USER
        return $this->belongsTo(User::class);
    }

    public function games(){
        //Ogni oggetto di classe console può appartenere a più oggetti di classe Game
        return $this->belongsToMany(Game::class);
    }
}
