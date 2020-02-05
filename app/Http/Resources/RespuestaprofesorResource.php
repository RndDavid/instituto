<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RespuestaprofesorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /* return parent::toArray($request); */
        return [
            'id' => $this->id,
            'profesor' => $this->profesorObject,
            'peticionesinformacion_id' => $this->peticionesinformacionObject,
            'comportamiento' => $this->comportamiento,
            'nivelacademico' => $this->nivelacademico,
            'observaciones' => $this->observaciones,
        ];
    }
}
