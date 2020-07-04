<?php

namespace App\Http\Controllers;

use App\Process;
use App\Requisitos;
use App\Documents;
use App\Input;
use App\Output;
use App\Activity;
use App\Indicators;
use App\Areas;
use App\Seguimiento;
use App\User;
use App\Cliente;
use App\Proveedor;
use App\Recursos;
use App\Gambiental;
use App\Gseguridad;
use App\Riesgo;
use App\Cargo;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Process::all();
        // return $procesos;
        return view('process.index', compact('procesos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('createProcess')) {

            /* se añade validacion para excluir el rol Super Admin */
            if (auth()->user()->hasRole(['Super Admin'])) {
                $roles = Role::all(['id', 'name']);
            }else{
                $roles = Role::all(['id', 'name'])->where('name', '!=', 'Super Admin');
            }
            
            /*$users = User::all(['id', 'name']);*/
            $areas = Areas::all(['id', 'AreaName']);
            $requisitos = Requisitos::all(['id', 'ReqName']);
            $documentos = Documents::all(['id', 'DocName']);
            //$entradas = Input::all(['id', 'InputName', 'InputType']);
            //$salidas = Output::all(['id', 'OutputName', 'OutputType']);
            $actividades = Activity::all(['id', 'ActiName', 'ActiType']);
            $indicadores = Indicators::all(['id', 'IndName']);
            $soportes = Process::all(['id', 'ProcName']);
            // $seguimientos = Seguimiento::all(['id', 'SeguiName']);
            //$clientes = Cliente::all(['id', 'CliName', 'CliType']);
            //$proveedores = Proveedor::all(['id', 'ProvName', 'ProvType']);
            $recursos = Recursos::all(['id', 'RecName', 'RecType']);
            $gambientales = Gambiental::all(['id', 'GesName']);
            $gseguridades = Gseguridad::all(['id', 'SeguName']);
            $riesgos = Riesgo::all(['id', 'RiesgDescrip']);
            $cargos = Cargo::orderBy('CargoName')->get(['id', 'CargoName']);

            /* variables para los formularios de destroy */
            //$salidasDrop = Output::doesntHave('procesos')->get();
            //$entradasDrop = Input::doesntHave('procesos')->get();
            //$actividadesDrop = Activity::doesntHave('procesos')->get();
            // $seguimientosDrop = Seguimiento::doesntHave('procesos')->get();
            //$clientesDrop = Cliente::doesntHave('procesos')->get();
            //$proveedoresDrop = Proveedor::doesntHave('procesos')->get();
            $recursosDrop = Recursos::doesntHave('procesos')->get();
            $gambientalesDrop = Gambiental::doesntHave('procesos')->get();
            $gseguridadesDrop = Gseguridad::doesntHave('procesos')->get();
            $riesgosDrop = Riesgo::doesntHave('procesos')->get();

            $usuario = Auth::user()->id;

            // return view('process.createwithIframe', compact(['proveedoresDrop', 'clientesDrop', 'proveedores', 'clientes', 'roles', 'requisitos', 'documentos', 'entradas', 'salidas', 'actividades', 'indicadores', 'soportes', 'areas', 'salidasDrop', 'entradasDrop', 'actividadesDrop', 'usuario', 'recursos', 'recursosDrop', 'gambientales', 'gambientalesDrop', 'gseguridades', 'gseguridadesDrop', 'cargos']));
            return view('process.create', compact(['roles', 'requisitos', 'documentos', 'indicadores', 'soportes', 'areas', 'usuario', 'recursos', 'recursosDrop', 'gambientales', 'gambientalesDrop', 'gseguridades', 'gseguridadesDrop', 'riesgosDrop', 'cargos' ,'riesgos']));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear Procesos');
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

        // return $request;
        $path = $request->file('ProcImage')->store('public/Procesos');

        // se crea el registro del documento en la base de datos
        $process = new Process();
        $process->ProcName = $request->input('ProcName');
        $process->ProcRevVersion = $request->input('ProcRevVersion');
        $process->ProcObjetivo = $request->input('ProcObjetivo');
        $process->ProcAlcance = $request->input('ProcAlcance');
        $process->ProcAmbienTrabajo = $request->input('ProcAmbienTrabajo');
        $process->ProcResponsable = $request->input('ProcResponsable');
        $process->ProcParticipantes = $request->input('ProcParticipantes');
        $process->ProcElaboro = $request->input('ProcElaboro');

        $process->ProcPolitOperacion = $request->input('ProcPolitOperacion');
        $process->ProcRiesgos = $request->input('ProcRiesgos'); 

        $process->ProcReviso = $request->input('ProcReviso');
        $process->ProcAprobo = $request->input('ProcAprobo');
        $process->ProcImage = $path;
        $process->ProcDate = $request->input('ProcDate');
        $process->ProcAlcance = $request->input('ProcAlcance');
        $process->ProcAmbienTrabajo = $request->input('ProcAmbienTrabajo');
        $process->ProcPolitOperacion = $request->input('ProcPolitOperacion');
        $process->ProcLink = $request->input('ProcLink');
        $process->ProcChangesDescription = 'creado el '.now();
        $process->ProcTipo = $request->input('ProcTipo');
        $process->save();

        $process->entradas()->attach($request->input('Entradas'));
        $process->salidas()->attach($request->input('Salidas'));
        $process->actividades()->attach($request->input('Actividades'));
        $process->clientes()->attach($request->input('Clientes'));
        $process->proveedores()->attach($request->input('Provedores'));
        $process->documentos()->attach($request->input('Docs'));
        $process->areas()->attach($request->input('Areas'));
        $process->indicadores()->attach($request->input('Indicadores'));
        $process->procesosDeSoporte()->attach($request->input('Soporte'));
        $process->requisitos()->attach($request->input('ProcRequsitos'));
        $process->recursos()->attach($request->input('ProcRecursos'));
        $process->gambientals()->attach($request->input('Gambiental'));
        $process->gseguridads()->attach($request->input('Gseguridad'));
        $process->riesgos()->attach($request->input('Riesgo'));
        // $process->seguimientos()->attach($request->input('Seguimientos'));
        /*$document->assignAreas($areas);*/

        // redireccionamiento al index de documentos
        return redirect()->route('proceso.index')->withStatus(__('Proceso creado correctamente')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function show(Process $proceso)
    {
        $roles = Role::all(['id', 'name']);

        // return $proceso;

        $usuario = Auth::user()->id;
        return view('process.showWithIframe', compact('proceso', 'usuario', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $proceso)
    {
        if (auth()->user()->can('updateProcess')) {
            // return $proceso;
            /* se añade validacion para excluir el rol Super Admin */
            if (auth()->user()->hasRole(['Super Admin'])) {
                $roles = Role::all(['id', 'name']);
            }else{
                $roles = Role::all(['id', 'name'])->where('name', '!=', 'Super Admin');
            }

            $areas = Areas::all(['id', 'AreaName']);
            $requisitos = Requisitos::all(['id', 'ReqName']);
            $documentos = Documents::all(['id', 'DocName']);
            $indicadores = Indicators::all(['id', 'IndName']);
            $soportes = Process::all(['id', 'ProcName']);
            $recursos = Recursos::all(['id', 'RecName', 'RecType']);
            $gambientales = Gambiental::all(['id', 'GesName']);
            $gseguridades = Gseguridad::all(['id', 'SeguName']);
            $riesgos = Riesgo::all(['id', 'RiesgDescrip']);
            $cargos = Cargo::orderBy('CargoName')->get(['id', 'CargoName']);

            $recursosDrop = Recursos::doesntHave('procesos')->get();
            $gambientalesDrop = Gambiental::doesntHave('procesos')->get();
            $gseguridadesDrop = Gseguridad::doesntHave('procesos')->get();
            $riesgosDrop = Riesgo::doesntHave('procesos')->get();

            /*return $proceso->entradas;*/
            return view('process.edit', compact(['roles', 'requisitos', 'documentos', 'indicadores', 'soportes', 'areas', 'usuario', 'proceso', 'recursos', 'gambientales', 'gseguridades', 'recursosDrop', 'gambientalesDrop', 'gseguridadesDrop', 'riesgos', 'riesgosDrop', 'cargos']));

        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar Procesos');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $proceso)
    {
        // return $request;
        $proceso->update($request->except(['ProcImage']));

        if ($request->hasFile('ComiSrc')){
            $ComiSrcActual = $proceso->ComiSrc;
            Storage::disk('local')->delete($ComiSrcActual);
            $path = $request->file('ProcImage')->store('public/Procesos');
            $proceso->update(['ProcImage' => $path]);
        }else{
           
        }

        if (!$request->input('ProcPolitOperacion')){
            $proceso->update(['ProcPolitOperacion' => ['no tiene politicas de operacion']]);
        }
        

        // $proceso->entradas()->sync($request->input('Entradas'));
        // $proceso->salidas()->sync($request->input('Salidas'));
        // $proceso->actividades()->sync($request->input('Actividades'));
        // $proceso->clientes()->sync($request->input('Clientes'));
        // $proceso->proveedores()->sync($request->input('Provedores'));
        $proceso->documentos()->sync($request->input('Docs'));
        $proceso->areas()->sync($request->input('Areas'));
        $proceso->indicadores()->sync($request->input('Indicadores'));
        $proceso->procesosDeSoporte()->sync($request->input('Soporte'));
        $proceso->requisitos()->sync($request->input('ProcRequsitos'));
        $proceso->recursos()->sync($request->input('ProcRecursos'));
        $proceso->gambientals()->sync($request->input('Gambiental'));
        $proceso->gseguridads()->sync($request->input('Gseguridad'));
        $proceso->riesgos()->sync($request->input('Riesgo'));


        return redirect()->route('proceso.index')->withStatus(__('Proceso actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $proceso)
    {
        // $proceso->Actividades()->detach();
        // $proceso->Entradas()->detach();
        // $proceso->Salidas()->detach();
        if (auth()->user()->can('deleteProcess')) {
            $proceso->Areas()->detach();
            $proceso->Documentos()->detach();
            $proceso->Indicadores()->detach();
            $proceso->procesosDeSoporte()->detach();
            $proceso->Requisitos()->detach();
            $proceso->delete();
            return redirect()->route('proceso.index')->withStatus(__('Proceso eliminado correctamente'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para eliminar Procesos');
        }
        
    }
}
