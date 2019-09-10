<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpsi_atencion_psicologo extends Model
{
    public function atencion_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    
    public function atencion_psicologo_r(){ 
        return $this->belongsTo(gpsi_psicologo::class); 
    }
}

