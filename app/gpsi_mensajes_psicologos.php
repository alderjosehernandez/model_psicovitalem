<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpsi_mensajes_psicologos extends Model
{
    public function mensaje_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    
    public function mensaje_psicologo_r(){ 
        return $this->belongsTo(gpsi_psicologo::class); 
    }
}
