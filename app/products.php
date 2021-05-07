<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $timestamps=false;
    
  public function commande()
    {
        return $this->belongsToMany('APP\commande');
    }

}
