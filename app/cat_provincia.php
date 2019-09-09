<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_provincia extends Model
{
    public function pais_provincia_r(){ //$libro->categoria->nombre
        return $this->belongsTo(cat_pais::class); //Pertenece a una categoría.
    }
}
