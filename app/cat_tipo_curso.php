<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_tipo_curso extends Model
{
    public function tipo_curso_cursos_r()
    {
        return $this->hasMany(gte_cursos::class);
    }
}
