<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticioninformacion extends Model
{
    protected $table = 'peticionesinformacion';

    protected $fillable = ['tutorGrupo','alumno','observaciones'];

    public function respuestasprofesores() {
        return $this->hasMany('\App\Respuestaprofesor','peticionesinformacion_id');
    }

    public function tutorGrupoObject() {
        return $this->belongsTo('\App\User','tutorGrupo');
    }

    public function alumnoObject() {
        return $this->belongsTo('\App\User','alumno');
    }
}
