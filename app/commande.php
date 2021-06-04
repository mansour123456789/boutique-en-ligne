<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    public $timestamps=false;
 public function client()
   {
        return $this->belongsTo('APP\client');
    }
    public function product()
    {
        return $this->belongsToMany('APP\product');
    }
}
