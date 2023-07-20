<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    //Attributes
    protected $fillable = [
        'title',
        'softwarehouse',
        'description',
        'cover',
        'user_id'
    ];

    public function user(){
        //OGNI OGGETTO DI CLASSE GAME PUO' AVERE UN SOLO OGGETTO DI CLASSE USER
        return $this->belongsTo(User::class);
    }

    public function consoles(){
        //Ogni oggetto di classe Game può appartenere a più oggetti di classe console
        return $this->belongsToMany(Console::class);
    }
}
