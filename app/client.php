<?php

namespace App;
use App\clients;


use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    public $timestamps=false;
 public function client()
   {
        return $this->belongsTo('APP\client');
    }

}