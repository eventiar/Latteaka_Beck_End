<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    //menu
    protected $fillable = [
        'title', 'description', 'photo',
    ];
    protected $table = 'menu';
}

