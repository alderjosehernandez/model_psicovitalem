<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gte_seccion_usuario extends Model
{
    public function seccion_u_usuarios_r()
    {
        return $this->belongsTo(usuarios::class);
    }
    public function seccion_u_seccion_r()
    {
        return $this->belongsTo(gte_secciones_curso::class);
    }
}
