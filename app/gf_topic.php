<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gf_topic extends Model
{
    public function topic_foro_r(){ 
        return $this->belongsTo(gf_foro::class); 
    }
    public function topic_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    public function topic_respuestas_r()
    {
        return $this->hasMany(gf_respuestas_topic::class);
    }
}
