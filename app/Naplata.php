<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naplata extends Model
{
    protected $fillable = [
        'id_usluge', 'id_zaposlenog', 'datum', 'vreme',
    ];
}
