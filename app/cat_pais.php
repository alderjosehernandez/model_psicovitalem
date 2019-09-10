<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_pais extends Model
{
    public function paises_provincias_r()
    {
        return $this->hasMany(cat_provincia::class);
    }
}
