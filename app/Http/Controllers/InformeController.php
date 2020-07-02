<?php

namespace App\Http\Controllers;

use App\Informe;
use Illuminate\Http\Request;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = Informe::all();

        return view('informes.index', compact('informes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('createInformes')) {
                return view('informes.create');
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear informes');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informe = new Informe();
        $informe->InfoName = $request->input('InfoName');
        $informe->InfoLink = $request->input('InfoLink');
        $informe->save();

        return redirect()->route('informes.index')->withStatus(__('informe cargado correctamente'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function show(Informe $informe)
    {
        return view('informes.show', compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function edit(Informe $informe)
    {
        if (auth()->user()->can('updateInformes')) {
                return view('informes.edit', compact('informe'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar informes');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informe $informe)
    {
        $informe->update($request->all());

        return redirect()->route('informes.index')->withStatus(__('informe actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Informe  $informe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informe $informe)
    {
        if (auth()->user()->can('deleteInformes')) {
            $informe->delete();
            return redirect()->route('informes.index')->withStatus(__('informe eliminado correctamente'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para eliminar informes');
        }
    }
}
