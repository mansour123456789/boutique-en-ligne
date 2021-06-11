<?php

namespace App;
use App\commande;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $timestamps=false;
    
  public function commande()
    {
        return $this->belongsToMany('APP\commande');
    }

}

