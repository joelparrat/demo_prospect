<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'birthday', 'job', 'company', 'add_number', 
        'add_street', 'add_zipcode', 'add_city', 'add_country', 'telephone', 'email',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        ,
    ];
    
}
