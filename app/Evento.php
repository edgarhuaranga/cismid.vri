<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    public function getMes(){
      return "SET";
    }

    public function getDia(){
      return 15;
    }
}
