<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['id',
        'name',
        'text',
        'image',
        'price',
        'type_one',
        'type_two',
        'type_three',
        'type_four'];
}
