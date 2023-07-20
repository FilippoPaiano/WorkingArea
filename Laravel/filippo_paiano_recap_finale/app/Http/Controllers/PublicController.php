<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $libraries = Library::orderBy('created_at', 'DESC')->take(3)->get();
        
        return view('welcome', compact('libraries'));
    }
}
