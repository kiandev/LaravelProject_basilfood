<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basil extends Model
{
    protected $fillable = ['id',
        'title',
        'text',
        'image',
        'site',
        'email',
        'instagram',
        'phone',
        ];
}
