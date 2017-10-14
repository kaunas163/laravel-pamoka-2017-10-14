<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garazas extends Model
{
    protected $table = "garazai";

    public function automobiliai()
    {
        return $this->hasMany('App\Automobilis');
    }
}
