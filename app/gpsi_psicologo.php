<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpsi_psicologo extends Model
{
    public function psicologo_usuario_r(){ 
        return $this->hasOne(usuarios::class); 
    }
    
    public function cualidad_psicologo_r(){ 
        return $this->hasMany(gpsi_psicologo_cualidad::class); 
    }
}
