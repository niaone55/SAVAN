<?php

namespace App\Http\Controllers;

use App\Book;

class AccountController extends Controller
{
    public function formulaire()
    {
        return view('store');
    }
    public function traitement()
    {

        request()->validate([
            'book_name'=>['required' ],
            'date'=>['required' ],
            'country'=>['required' ],
            'type'=>['required' ],
            'autor_name'=>['required' ],
            


        ]);
        
    $utilisateur= Book::create ([
        'book_name'=>request('book_name'),
        'date'=>request('date'),
        'country'=>request('country'),
        'type'=>request('type'),
        'autor_name'=>request('autor_name'),
    
    ]);
  
    return 'formulaire envoyé';

    }

    public function liste()
    {
        $utilisateur= \App\Book::all();

        return view('store', [

            'store'=>$utilisateur,

        ]);
    }

}
