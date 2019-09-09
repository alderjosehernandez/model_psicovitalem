<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_tipo_seccion extends Model
{
    public function tipo_sec_seccion_r()
    {
        return $this->hasMany(gte_seccion_curso::class);
    }
}
