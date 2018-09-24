<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function miembros(){
        return $this->hasMany(Miembro::class);
    }


}
