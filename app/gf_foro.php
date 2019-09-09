<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gf_foro extends Model
{
    public function foro_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    public function foro_topic_r()
    {
        return $this->hasMany(gf_topic::class);
    }   
}
