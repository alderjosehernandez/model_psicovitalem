<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_valor_pregunta extends Model
{
    public function valor_preg_tipo_preg_r(){ 
        return $this->belongsTo(cat_tipo_pregunta::class); 
    }
}
