<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Register extends Model implements Authenticatable{
    use BasicAuthenticatable;
    protected $fillable = ['username', 'email', 'password'];

}

