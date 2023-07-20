<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact_us(){
        return view('contattaci');
    }

    public function contact_submit(Request $request){
        
        
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        $user_data = compact('name', 'message');
        try{

            Mail::to($email)->send(new ContactMail($user_data));

            Mail::to('admin@freelippu.it')->send(new AdminMail($user_data, $email));
        }catch(Exception $error){
            
            return redirect('homepage')->with('emailError', "Non è stato possibile accogliere la tua richiesta. Riprova più tardi");
            
        }
        
        return redirect(route('homepage'))->with('emailSent', "Grazie per averci contattato. Ti abbiamo inviato una mail di conferma!");
    }
}
