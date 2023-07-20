<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    
    public function contact_us(){
        return view('contattaci');
    }
    
    public function contact_submit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        
        $user_data = compact('name', 'message');
        try{
            Mail::to($email)->send(new ContactMail($user_data));
            Mail::to('admin@national.it')->send(new AdminMail($user_data, $email));
        }catch(Exception $error){
            return redirect(route('homepage'))->with('emailError', 'Ci scusiamo per il disagio, la tua mail non è stata inviata, ti invitiamo a riprovare più tardi');
        }
        return redirect(route('homepage'))->with('emailSent', "Grazie per avverci contattato. Ti abbiamo inviato una mail di conferma!");
    }
}
