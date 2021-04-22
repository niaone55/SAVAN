<?php

namespace App\Http\Controllers;
use App\register;
use Illuminate\Support\Facades\Crypt;


class RegisterController extends Controller
{
    public function register()
    
    {
       
        request()->validate([
            'username'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required'],


        ]);

        $user= Register::create([

            'username'=> request('username'),
            'email'=> request('email'),
            'password'=> bcrypt(request('password')),

            
            
            ]);
            return redirect('home');
    }


}


