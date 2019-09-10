<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpsi_solicitud_psicologo extends Model
{
    public function solicitud_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    
    public function solicitud_psicologo_r(){ 
        return $this->belongsTo(gpsi_psicologo::class); 
    }
}
