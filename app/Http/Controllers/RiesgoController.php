<?php

namespace App\Http\Controllers;

use App\Riesgo;
use Illuminate\Http\Request;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgo = new Riesgo();
        $riesgo->RiesgDescrip = $request->input('RiesgDescrip');
        $riesgo->RiesgAction = $request->input('RiesgAction');
        $riesgo->save();

        return redirect()->route('proceso.create')->withStatus(__('Riesgo creado correctamente'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function show(Riesgo $riesgo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function edit(Riesgo $riesgo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riesgo $riesgo)
    {
        //
    }

    public function actualizar(Request $request)
    {
         // return $request;
        $riesgo = Riesgo::find($request->input('idocultoRiesgo'));
        $riesgo->RiesgDescrip = $request->input('RiesgDescrip');
        $riesgo->RiesgAction = $request->input('RiesgAction');
        $riesgo->save();

        return redirect()->route('proceso.create')->withStatus(__('Riesgo actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riesgo $riesgo)
    {
        if ($riesgo->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la gestión de seguridad y salud en el trabajo no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $riesgo->delete();

        return redirect()->route('proceso.create')->withStatus(__('Gestión de Seguridad y Salud en el Trabajo Eliminada correctamente'));
   
    }
}
