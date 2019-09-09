<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gt_test extends Model
{
    public function test_preguntas_r(){ 
        return $this->hasMany(gt_pregunta_test::class); 

    }
    
    public function test_area_r(){ 
        return $this->belongsTo(cat_area::class); 
    }
    
}
