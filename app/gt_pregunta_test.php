<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gt_pregunta_test extends Model
{
    public function pregunta_test_r(){ 
        return $this->belongsTo(gt_test::class); 
    }
    public function pregunta_tipo_r(){ 
        return $this->belongsTo(cat_tipo_pregunta::class); 
    }
   
}
