<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestaprofesor extends Model
{
    protected $table = 'respuestasprofesores';
    protected $fillable = ['profesor','peticionesinformacion_id', 'comportamiento', 'nivelacademico','observaciones'];

    public function profesorObject() {
        return $this->belongsTo('App\User', 'profesor');
    }
    public function peticionesinformacionObject() {
        return $this->belongsTo('App\User', 'peticionesinformacion_id');
    }
}
