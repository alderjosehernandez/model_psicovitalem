<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gte_secciones_curso extends Model
{
    public function secciones_c_curso_r()
    {
        return $this->belongsTo(gte_curso::class);
    }
    public function secciones_c_tipo_r()
    {
        return $this->belongsTo(cat_tipo_seccion::class);
    }
    public function secciones_c_foro_r()
    {
        return $this->hasMany(gf_foro::class);
    }
    public function secciones_c_test_r()
    {
        return $this->hasMany(gt_test::class);
    }
}
