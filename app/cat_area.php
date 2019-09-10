<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_area extends Model
{
    public function catearea_area_r(){ //$libro->categoria->nombre
        return $this->belongsTo(cat_categoria_area::class); //Pertenece a una categoría.
    }

}
