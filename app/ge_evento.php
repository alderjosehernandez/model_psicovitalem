<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ge_evento extends Model
{
    public function evento_comentario_r()
    {
        return $this->hasMany(ge_comentario::class);
    }
    public function evento_deporte_r(){ 
        return $this->belongsTo(cat_deporte::class); 
    }

    public function evento_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }

    public function evento_genero_r(){ 
        return $this->belongsTo(cat_genero::class); 
    }


    public function evento_provincia_r(){ 
        return $this->belongsTo(cat_provincia::class); 
    }


    public function evento_usuario_participante_r()
    {
        return $this->hasMany(ge_usuario_evento::class);
    }

}
