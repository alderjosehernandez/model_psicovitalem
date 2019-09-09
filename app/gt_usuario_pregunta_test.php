<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gt_usuario_pregunta_test extends Model
{
    public function u_pregunta_usuario_r(){ 
        return $this->belongsTo(usuarios::class); 
    }
    public function u_pregunta_test_r(){ 
        return $this->belongsTo(gt_pregunta_test::class); 
    }

    public function u_pregunta_valor_r(){ 
        return $this->belongsTo(cat_valor_pregunta::class); 
    }
}
