<?php
namespace App;
use \App\Auteur;
use \App\Country;
use \App\Type;

use \Illuminate\Database\Eloquent\Model;

class Book extends Model{

    protected $fillable= ['book_name', 'date', 'country_id', 'type_id', 'auteur_id'];

    public function auteur(){
        return $this->belongsTo(Auteur::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }

}