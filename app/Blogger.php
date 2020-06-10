<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notificatios\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatble;

class Blogger extends Authenticatble
{
    use Notifiable;

    protected $gaurd = "blogger";

    protected $fillable = ['name','email','password'];

    protected $hidden = ['password','remember_token'];
}
