<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps=false;
    
  public function commande()
    {
        return $this->belongsToMany('APP\commande');
    }

}
