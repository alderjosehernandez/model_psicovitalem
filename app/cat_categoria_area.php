<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_categoria_area extends Model
{
    public function areas_categ_areas_r()
    {
        return $this->hasMany(cat_area::class);
    }

}
