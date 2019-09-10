<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
       //eventos
       public function usuario_comentario_r()
       {
           return $this->hasMany(ge_comentario::class);
       }
       public function usuario_eventos_r()
       {
           return $this->hasMany(ge_evento::class);
       }
       public function usuario_eventos_inscritos_r()
       {
           return $this->hasMany(ge_usuario_evento::class);
       }
       //foros
       public function usuario_foros_r()
       {
           return $this->hasMany(gf_foro::class);
       }
       public function usuario_topic_r()
       {
           return $this->hasMany(gf_topic::class);
       }
       public function usuario_respuesta_topic_r()
       {
           return $this->hasMany(gf_respuestas_topic::class);
       }
       //notificaciones  mensajes
       public function usuario_mensaje_r()
       {
           return $this->hasMany(gnm_mensaje::class);
       }
       public function usuario_notificacion_r()
       {
           return $this->hasMany(gnm_notificacion::class);
       }
       //gestion de psicologos
       public function usuario_atenciones_psi_r()
       {
           return $this->hasMany(gpsi_atencion_psicologo::class);
       }
       public function usuario_solicitudes_psi_r()
       {
           return $this->hasMany(gpsi_solicitud_psicologo::class);
       }
       
       //test
       public function usuario_test_r()
       {
           return $this->hasMany(gt_usuario_pregunta_test::class);
       }

       //gestion entrenamiento talleres
       public function usuario_cursos_r()
       {
           return $this->hasMany(gte_curso::class);
       }

       public function usuario_perfil_r(){ 
        return $this->hasOne(perfil_usuario::class); 
        }
   
       public function evento_empresa_r(){ 
           return $this->belongsTo(cat_empresa::class); 
       }
}
