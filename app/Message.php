<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['id',
        'title',
        'text_user',
        'date_user',
        'code',
        'token',
        'text_admin',
        'date_admin'
        ];
}
