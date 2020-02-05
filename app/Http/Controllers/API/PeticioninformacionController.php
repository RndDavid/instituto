<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeticioninformacionResource;
use App\Peticioninformacion;
use Illuminate\Http\Request;

class PeticioninformacionController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Peticioninformacion::class, 'peticioninformacion');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PeticioninformacionResource::collection(Peticioninformacion::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peticioninformacion = Peticioninformacion::create(json_decode($request->getContent(),true));
        return new PeticioninformacionResource($peticioninformacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return \Illuminate\Http\Response
     */
    public function show(Peticioninformacion $peticioninformacion)
    {
        return new PeticioninformacionResource($peticioninformacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peticioninformacion $peticioninformacion)
    {
        $peticioninformacion->update(json_decode($request->getContent(),true));

        return new PeticioninformacionResource($peticioninformacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peticioninformacion  $peticioninformacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peticioninformacion $peticioninformacion)
    {
        $peticioninformacion->delete();
    }
}
