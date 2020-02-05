<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RespuestaprofesorResource;
use App\Respuestaprofesor;
use Illuminate\Http\Request;

class RespuestaprofesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   /*  public function __construct()
    {
        $this->authorizeResource(Respuestaprofesor::class, 'respuestaprofesor');
    } */

    public function index()
    {
        return RespuestaprofesorResource::collection(Respuestaprofesor::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $respuestaprofesor = Respuestaprofesor::create(json_decode($request->getContent(), true));


        return new RespuestaprofesorResource($respuestaprofesor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return \Illuminate\Http\Response
     */
    public function show(Respuestaprofesor $respuestaprofesor)
    {
        return new RespuestaprofesorResource($respuestaprofesor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuestaprofesor $respuestaprofesor)
    {
        $respuestaprofesor->update(json_decode($request->getContent(), true));
        return new RespuestaprofesorResource($respuestaprofesor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuestaprofesor  $respuestaprofesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuestaprofesor $respuestaprofesor)
    {
        $respuestaprofesor->delete();
    }
}
