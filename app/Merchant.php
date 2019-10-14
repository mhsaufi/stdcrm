<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
   	protected $table = "users";

    protected $fillable = [
        'name', 'email', 'password','fullname','phone',
    ];
}
