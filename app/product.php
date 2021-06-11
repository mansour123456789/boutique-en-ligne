<?php

namespace App;
use App\Product;


use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    public $timestamps=false;

  
    public function product()
    {
        return $this->belongsToMany('APP\product');
    }
}