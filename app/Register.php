<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //User Registration Required Information
    protected $fillable = [
      'username',
      'email',
      'password'
    ]
}
