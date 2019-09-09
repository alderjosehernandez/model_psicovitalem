<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_tipo_notificacion extends Model
{
    public function tipo_notif_notificaciones_r()
    {
        return $this->hasMany(gnm_notificaion::class);
    }
}
