<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gf_respuestas_topic extends Model
{
    public function respuesta_topic_r(){ 
        return $this->belongsTo(gf_topic::class); 
    }
    public function respuesta_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }

}
