<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Type;
use \App\Auteur;
use \App\Book;
use DB;

class StorageController extends Controller
{
    //
    public function stock()
    {
        $products=$this->author();
        $datas=$this->sum();
        $data= Type::all();
        $store= Auteur::all();
        $count = DB::table('types', 'auteurs')->select("*")->count();
        return view('product', ['types'=>$data, 'auteurs'=>$store, 'count'=>$count, 'datas'=>$datas, 'products'=>$products ]);         
    }

    public function affiche()
    {
       
        $data= Type::all();
        $books=Book::all();
    
        // dd($books);
        $store= Auteur::all();
        $count = DB::table('types', 'auteurs')->select("*")->count();
        return view('store', ['types'=>$data, 'auteurs'=>$store, 'books'=>$books, 'count'=>$count, ]); 
        
    }
    public function sum(){
        $types=Type::all();
        $data=[];
        foreach($types as $type){
            array_push($data,[
               'type_id'=>$type->id,
               'nom_type'=>$type->nom, 
               'livres'=>Book::where('type_id', $type->id)->get()
            ]);
        }   return $data;
    }

    public function author(){
        $auteurs= Auteur::all();
        $use=[];
        foreach ($auteurs as $auteur) {
           array_push($use,[
               'auteur_id'=>$auteur->id,
               'nom_auteur'=>$auteur->nom,
                'stores'=>Book::where('auteur_id', $auteur->id)->get()


           ]);
        } return $use;
    }


    // public function sum()
    // {
    //     $types= Type::all();
    //     $count = DB:: table('types')->count();
    //     return view('product', compact('count', 'types'));
    // }
}