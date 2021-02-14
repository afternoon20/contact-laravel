<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'subject', 'name', 'email', 'tel', 'contents'
    ];

    public $timestamps = false;
}
