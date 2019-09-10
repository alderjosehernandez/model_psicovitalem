<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gnm_notificacion extends Model
{
    public function notificacion_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
}
