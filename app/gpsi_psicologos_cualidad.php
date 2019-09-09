<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gpsi_psicologos_cualidad extends Model
{
    public function cualidad_psicologo_r(){ 
        return $this->belongsTo(gpsi_psicologo::class); 
    }
    public function psicologo_cualidad_r(){ 
        return $this->belongsTo(cat_cualidade::class); 
    }
}
