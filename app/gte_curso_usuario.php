<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gte_curso_usuario extends Model
{
    public function curso_u_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    public function curso_u_curso_r(){ 
        return $this->belongsTo(gte_curso::class); 
    }
}
