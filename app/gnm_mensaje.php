<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gnm_mensaje extends Model
{
    public function mensaje_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    public function topic_usuario_remitente_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
}
