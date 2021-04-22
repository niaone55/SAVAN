<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Str;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('types')->insert([
        ['nom'=>'Roman'],
        ['nom'=>'Poesie'], 
        ['nom'=>'Arlequin'],
        ['nom'=>'Histoire'],
        ['nom'=>'Science'], 
       ]);
    }
}
