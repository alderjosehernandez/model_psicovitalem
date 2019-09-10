<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_tipo_pregunta extends Model
{
    public function tipo_preg_preguntas_r()
    {
        return $this->hasMany(gt_pregunta_test::class);        
    }
    public function tipo_preg_valor_preg_r()
    {
        return $this->hasMany(cat_valor_pregunta::class);        
    }
}
