<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automobilis extends Model
{
    protected $table = 'automobiliai';

    public function garazas()
    {
        return $this->belongsTo('App\Garazas');
    }
}
