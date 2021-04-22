<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auteurs')->insert([
            [
                'nom' =>'Emile Zola' ,
               
            ],

            [
                'nom' =>'Ahmadou Kourouma' ,
                
                
            ],

            [
                'nom' =>'Victore Huguo' ,
                
            ],

            [
                'nom' =>'L.S Senghor' ,
                
            ],
            [
                'nom' =>'Camara Laye' ,
               
            ],

            [
                'nom' =>'Albert Camus' ,
               
            ],

            [
                'nom' =>'David Diop' ,
                
            ],
           
            
           ]); 
    }
}
