<?php

namespace App\Http\Controllers;

use App\Seguimiento;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
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
        $seguimiento = new Seguimiento();
        $seguimiento->SeguiName = $request->input('SeguiName');
        $seguimiento->save();
        
        return redirect()->route('proceso.create')->withStatus(__('Seguimiento creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */



    public function actualizar(Request $request)
    {
        // return $request;
        $seguimiento = Seguimiento::find($request->input('idocultoSegui'));
        $seguimiento->SeguiName = $request->input('SeguiName');
        $seguimiento->save();

        return redirect()->route('proceso.create')->withStatus(__('Salida actualizada correctamente'));
    }



    public function update(Request $request, Seguimiento $seguimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seguimiento  $seguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguimiento $seguimiento)
    {
        if ($seguimiento->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('el seguimiento no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $seguimiento->delete();

        return redirect()->route('proceso.create')->withStatus(__('Seguimiento Eliminado correctamente'));
    
    }
}
