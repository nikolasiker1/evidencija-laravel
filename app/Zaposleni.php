<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaposleni extends Model
{
    protected $fillable = [
        'id', 'ime', 'prezime', 'email', 'broj_telefona',
    ];
}
