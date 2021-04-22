<?php

namespace App\Http\Controllers;

use App\Book;
use App\Country;
use App\Auteur;
use App\Type;


class AccountController extends Controller
{
    public function formulaire()
    {
        return view('store');
    }

    public function traitement()
    {
//  dd(request()->all());
        request()->validate([
            'book_name'=>['required' ],
            'date'=>['required' ],
            'countries'=>['required' ],
            'type'=>['required' ],
            'auteur'=>['required' ],
            
        ]);

         $utilisateur= Country::create([
         'nom'=>request('countries'),

         ]);
            
        // $type=Type::create([
        // 'nom'=>request('type'),
        // ]);

        // $auteur=Auteur::create([
        //     'nom'=>request('auteur'),
            
        //     ]);
        // dd(request()->all());
     Book::create ([
        'book_name'=>request('book_name'),
        'date'=>request('date'),
         'country_id'=>$utilisateur->id,
        'type_id'=>request('type'),
        'auteur_id'=>request('auteur'),
    ]); 
    return redirect()->back()->with(["reponse"=>"Livre enregistré avec succès"]);

    }

}
