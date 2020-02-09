<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //subscriber
    protected $fillable = [
        'email',
    ];
    protected $table = 'subscriber';
}
