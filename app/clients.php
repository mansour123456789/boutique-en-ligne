<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    public $timestamps=false;
    public function commande()
    {
        return $this->hasMany('APP\commande');
    }
}
