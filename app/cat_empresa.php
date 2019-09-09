<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_empresa extends Model
{
    public function empleados_empresas_r()
    {
        return $this->hasMany(usuarios::class);
    }
}
