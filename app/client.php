<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public $timestamps=false;
    public function commande()
    {
        return $this->hasMany('APP\commande');
    }
}
