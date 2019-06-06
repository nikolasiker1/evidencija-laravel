<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usluga extends Model
{
    protected $fillable = [
        'trajanje', 'tip', 'cena', 'id',
    ];
}
