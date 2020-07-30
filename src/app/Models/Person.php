<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'rep_sunject',
        'country_id',
        'phone',
        'email',
        'company',
        'position',
        'about',
        'photo',
        'show'
    ];

}
