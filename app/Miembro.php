<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    public function grupo(){
      return $this->belongsTo(Grupo::class);
    }
}
