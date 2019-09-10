<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ge_comentario extends Model
{
    public function comentarios_eventos_r(){ 
        return $this->belongsTo(ge_evento::class); 
    }
}
