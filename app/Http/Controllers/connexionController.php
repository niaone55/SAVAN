<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionController extends Controller
{
    public function formulaire()
    {
        return view('pg1');
    }

    public function traitement()

    {
        request()->validate([
            'email' =>['required', 'email'],
            'password' =>['required'],
            
        ]);

        $resultat=auth()->attempt([
            'email'=> request('email'),
            'password' => request('password')
        ]);

        if($resultat){
            return redirect('home');

        }
         return back()->withInput();
        
    }
}
