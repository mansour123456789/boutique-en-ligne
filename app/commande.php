<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    public $timestamps=false;
 public function clients()
   {
        return $this->belongsTo('APP\clients');
    }
    public function products()
    {
        return $this->belongsToMany('APP\products');
    }
}
