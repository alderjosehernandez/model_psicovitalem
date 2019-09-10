<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil_usuario extends Model
{
    public function usuario_perfil_r(){ 
        return $this->hasOne(usuarios::class); 
    }
}
