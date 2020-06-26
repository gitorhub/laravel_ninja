<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $tabel="some_name"; ////ama gerek yok değiştirmeye
    protected $casts=[
        'toppings'=>'array', //toggles between the json and array or the type og it
        'base'=>'array',
    ];
    
}
