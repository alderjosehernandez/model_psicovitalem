<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ge_usuario_evento extends Model
{
    public function relacion_evento_r(){ 
        return $this->belongsTo(ge_evento::class); 
    } 
    public function relacion_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }

}
