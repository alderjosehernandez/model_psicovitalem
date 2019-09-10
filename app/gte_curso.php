<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gte_curso extends Model
{
    public function curso_psicologo_r(){ 
        return $this->belongsTo(gpsi_psicologo::class); 
    }
    public function curso_tipo_r(){ 
        return $this->belongsTo(cat_tipo_curso::class); 
    }
    public function curso_area_r(){ 
        return $this->belongsTo(cat_area::class); 
    }
}
