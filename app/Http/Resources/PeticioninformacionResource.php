<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeticioninformacionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'tutorGrupo' => $this->tutorGrupoObject,
            'alumno' => $this->alumnoObject,
            'observaciones' => $this->observaciones,
        ];
    }
}
