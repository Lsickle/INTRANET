@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Procesos
@endsection

@push('css')
        {{-- <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
		<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/> --}}
        <link href="{{ asset('css') }}/select2.css" rel="stylesheet"/>
@endpush

@section('content')
	{{-- contenido de la pagina --}}
	<div class="card">
		<div class="card-header px-4">
			<div class="row justify-content-between">
				<div> 
					<h2>
						<b>{{'Editar Proceso'}}</b>
					</h2>
				</div>
				<div>
					 <!-- Level one dropdown -->
					 <div class="btn-group">
						<a type="button" id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class=" btn btn-info dropdown-toggle">Modificar Elementos</a>
						<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow dropdown-menu-left">
							<!-- Level two dropdown-->
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Recursos</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateRecursos">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditRecursos">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteRecursos">Eliminar</a>
								</ul>
							</li>
							<!-- End Level two -->
							<!-- Level two dropdown-->
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Gestión de SST</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGseguridad">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditGseguridad">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGseguridad">Eliminar</a>
								</ul>
							</li>
							<!-- End Level two -->
							
							<!-- Level two dropdown-->
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Gestión Ambiental</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGambiental">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditGambiental">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGambiental">Eliminar</a>
								</ul>
							</li>
							<!-- End Level two -->
							<!-- Level two dropdown-->
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Politicas</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<button class="dropdown-item" id="addpoliticbutton" onclick="addPolitica()">
									Añadir politica
									</button>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Riesgos</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<button class="dropdown-item" id="addriesgobutton" onclick="addRiesgo()">
									Añadir riesgo
									</button>
								</ul>
							</li>
							<!-- End Level two -->
						</ul>
					</div>
				</div>
			</div>
		</div>
			@include('alerts.success')
			 <form role="form" method="POST" action="{{ route('proceso.update', $proceso) }}" enctype="multipart/form-data">
			 @csrf
			 @method('PUT')
			<div class="card-body">
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcName">Nombre del Proceso</label>
							<input type="text" value="{{$proceso->ProcName}}" class="form-control" id="ProcName" placeholder="Compras" name="ProcName">
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRevVersion">N° de Revisión</label>
							<input type="text" value="{{$proceso->ProcRevVersion}}" class="form-control" id="ProcRevVersion" placeholder="N° de Revisión" name="ProcRevVersion">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAlcance">Alcance del Proceso</label>
							<input  max="500" class="form-control" id="ProcAlcance" name="ProcAlcance" value="{{$proceso->ProcAlcance}}">
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="custom-input-file">
							<label class="input-label" for="ProcImage">Imagen de referencia</label>
							<input type="file" value="{{$proceso->ProcImage}}" class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcResponsable">Responsable del Proceso</label>
							<select id="ProcResponsable" required class="form-control" name="ProcResponsable[]" placeholder="seleccione" multiple>
								@foreach($cargos as $cargo)
									<option 
									@foreach ($proceso->ProcResponsable as $responsable)
										@if ($responsable == $cargo->CargoName)
											selected
										@endif
									@endforeach
									value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAutoridad">Autoridad del Proceso</label>
							<select id="ProcAutoridad" required class="form-control" name="ProcAutoridad" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option 
										@if ($proceso->ProcAutoridad == $cargo->CargoName)
											selected
										@endif
									value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRecursos">Recursos Necesarios</label>
							<select multiple id="Recursos" class="form-control" name="Recursos[]" placeholder="seleccione">
								@foreach($recursos as $recursoitem)
									<option value="{{$recursoitem->id}}"
										@foreach($proceso->recursos as $recurso)
											@if($recurso->id == $recursoitem->id)
												selected  
											@endif
										@endforeach
										>{{$recursoitem->RecName}} - 
										@switch($recursoitem->RecType)
											@case(0)
												Fisico
												@break
											@case(1)
												Humano
												@break
											@case(2)
												Financiero
												@break
										@endswitch
									</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcElaboro">Elaborado Por</label>
							<select id="ProcElaboro" required class="form-control" name="ProcElaboro" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option 
									@if ($proceso->ProcElaboro == $cargo->CargoName)
										selected
									@endif
									value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcReviso">Revisado Por</label>
							<select id="ProcReviso" required class="form-control" name="ProcReviso" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option 
									@if ($proceso->ProcReviso == $cargo->CargoName)
										selected
									@endif
									value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAprobo">Aprobado Por</label>
							<select id="ProcAprobo" required class="form-control" name="ProcAprobo" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option 
									@if ($proceso->ProcAprobo == $cargo->CargoName)
										selected
									@endif
									value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcTipo">Tipo de Proceso</label>
							<select id="ProcTipo" required class="form-control" name="ProcTipo[]" placeholder="seleccione">
								<option {{$proceso->ProcTipo =='De Apoyo' ? 'selected' : ''}} value="De Apoyo">De Apoyo</option>
								<option {{$proceso->ProcTipo =='Estratégico' ? 'selected' : ''}} value="Estratégico">Estratégico</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAmbienTrabajo">Ambiente de Trabajo</label>
							<input class="form-control" id="ProcAmbienTrabajo" name="ProcAmbienTrabajo" value="{{$proceso->ProcAmbienTrabajo}}">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gambiental">Gestión Ambiental</label>
							<select multiple id="Gambiental" class="form-control" name="Gambiental[]" placeholder="seleccione">
								@foreach($gambientales as $gambiental)
								<option value="{{$gambiental->id}}"
									@foreach($proceso->gambientals as $gambientalSelect)
										@if($gambientalSelect->id == $gambiental->id)
										selected
										@endif
									@endforeach
									>{{$gambiental->GesName}} -
									@switch($gambiental->GesType)
									@case(0)
									Aspectos Ambientales
									@break
									@case(1)
									Impactos Ambientales
									@break
									@case(2)
									Controles Operacionales
									@break
									@endswitch
								</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gseguridad">Gestión de Seguridad y Salud en el Trabajo</label>
							<select multiple id="Gseguridad" class="form-control" name="Gseguridad[]" placeholder="seleccione">
								@foreach($gseguridades as $gseguridad)
								<option value="{{$gseguridad->id}}"
									@foreach($proceso->gseguridads as $gseguridadselect)
										@if($gseguridadselect->id == $gseguridad->id)
										selected
										@endif
									@endforeach
									>{{$gseguridad->SeguName}} -
									@switch($gseguridad->SeguType)
									@case(0)
									Peligros
									@break
									@case(1)
									Riesgos
									@break
									@case(2)
									Controles Operacionales
									@break
									@endswitch
								</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>


				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Indicadores">Indicadores</label>
							<select multiple id="Indicadores" class="form-control" name="Indicadores[]" placeholder="seleccione">
								@foreach($indicadores as $indicador)
								<option @foreach($proceso->indicadores as $indiSelect)
									@if($indiSelect->id == $indicador->id)
									selected
									@endif
									@endforeach
									value="{{$indicador->id}}">{{$indicador->IndName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Soporte">Procesos de Soporte</label>
							<select multiple id="Soporte" class="form-control" name="Soporte[]" placeholder="seleccione">
								@foreach($soportes as $soporte)
								<option @foreach($proceso->procesosDeSoporte as $sopoSelect)
									@if($sopoSelect->id == $soporte->id)
									selected
									@endif
									@endforeach
									value="{{$soporte->id}}">{{$soporte->ProcName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Docs">Documentación aplicable</label>
							<select multiple id="Docs" class="form-control" name="Docs[]" placeholder="seleccione">
								@foreach($documentos as $documento)
								<option @foreach($proceso->documentos as $docuSelect)
									@if($docuSelect->id == $documento->id)
									selected
									@endif
									@endforeach
									value="{{$documento->id}}">{{$documento->DocName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Areas">Areas Que participan</label>
							<select multiple id="Areas" class="form-control" name="Areas[]" placeholder="seleccione">
								@foreach($areas as $area)
								<option @foreach($proceso->areas as $areaSelect)
									@if($areaSelect->id == $area->id)
									selected
									@endif
									@endforeach
									value="{{$area->id}}">{{$area->AreaName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>



				<div class="form-row" id="containerDePoliticas">
					@foreach($proceso->ProcPolitOperacion as $operacion)
					<div class="col-md-6 col-xs-12" id="politicaOperacion0">
						<div class="form-group">
							<label class="input-label" for="ProcPolitOperacioninput0">Politica de Operación</label>
							<div class="input-group">
								<input type="text" required id="ProcPolitOperacioninput0" class="form-control" placeholder="Politica de Operación" aria-label="Politica de Operación" aria-describedby="button-addon2" name="ProcPolitOperacion[]" value="{{$operacion}}"> 
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropPolitica(0)">Borrar</button>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>



				<div class="form-row" id="containerDeRiesgos">
					@foreach($proceso->ProcRiesgos as $riesgo)
					<div class="col-md-6 col-xs-12" id="riesgos0">
						<div class="form-group">
							<label class="input-label" for="ProcRiesgosinput0">Riesgos</label>
							<div class="input-group">
								<input type="text" id="ProcRiesgosinput0" class="form-control" placeholder="Riesgos" aria-label="Riesgos" aria-describedby="button-addon2" name="ProcRiesgos[]" value="{{$riesgo}}">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropRiesgo(0)">Borrar</button>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>


				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
							<select multiple class="form-control" name="ProcRequsitos[]" placeholder="seleccione"
								id="ProcRequsitos">
								@foreach($requisitos as $requisito)
								<option @foreach($proceso->requisitos as $requiSelect)
									@if($requiSelect->id == $requisito->id)
									selected
									@endif
									@endforeach
									value="{{$requisito->id}}">{{$requisito->ReqName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRequsitos">Fecha</label>
							<input type="date" name="ProcDate" class="form-control" value="{{$proceso->ProcDate}}">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcObjetivo">Objetivo del Proceso</label>
							<input class="form-control" id="ProcObjetivo" name="ProcObjetivo" value="{{$proceso->ProcObjetivo}}">
							</input>
						</div>
					</div>
					
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRevVersion">Descripción del cambio</label>
							<input type="text" class="form-control" id="email" placeholder="descripcion del cambio" name="ProcChangesDescription" value="{{$proceso->ProcChangesDescription}}">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			   <button type="submit" class="btn btn-success">Enviar</button>
		</div>

		</form> 
	</div>




	{{-- Esta es la sección de los modal CREATE--}}

	{{-- Este modal corresponde a los Gestión de seguridad y salud en el trabajo--}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateGseguridad
		@endslot
		@slot('titulo')
			Nueva Gestión de Seguridad y Salud en el Trabajo
		@endslot
		@slot('action')
			{{ route('gseguridad.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre de la Gestión de SST</label>	      
				<input type="text" name="SeguName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Gestión SST</label>
				<select name="SeguType" class="text-center form-control" required="">
					<option value="0">Peligros</option>
					<option value="1">Riesgos</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Este modal corresponde a la Gestión ambiental --}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateGambiental
		@endslot
		@slot('titulo')
			Nueva Gestión Ambiental
		@endslot
		@slot('action')
			{{ route('gambiental.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre de la Gestión Ambiental</label>	      
				<input type="text" name="GesName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Gestión Ambiental</label>
				<select name="GesType" class="text-center form-control" required="">
					<option value="0">Aspectos Ambientales</option>
					<option value="1">Impactos Ambientales</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Este modal corresponde a los Recursos --}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateRecursos
		@endslot
		@slot('titulo')
			Nuevo Recurso
		@endslot
		@slot('action')
			{{ route('recursos.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre del Recurso</label>	      
				<input type="text" name="RecName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Recurso</label>	      
				<select name="RecType" class="text-center form-control" required="">
					<option value="0">Fisico</option>
					<option value="1">Humano</option>
					<option value="2">Financiero</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Parte del documento donde se encuentran los modales de EDIT --}}


	{{-- Modal de edición de Gestión de Seguridad y Salud en el Trabajo --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditGseguridad
		@endslot
		@slot('titulo')
			Editar Gestión de Seguridad y Salud en el Trabajo
		@endslot
		@slot('action')
			{{ route('gseguridad.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectGseguridad" class="form-control" onchange="cambiarGseguridadId()">
					@foreach($gseguridades as $gseguridad)
						<option value="{{$gseguridad->id}}">{{$gseguridad->SeguName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoGsegu" type="text" value="
			@foreach($gseguridades as $gseguridad)
				@if($loop->first)
					{{$gseguridad->id}}
				@endif
			@endforeach
			" name="idocultoGsegu" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="SeguName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="SeguType" class="text-center form-control" required="">
					<option value="0">Peligros</option>
					<option value="1">Riesgos</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Modal de edición de Gestión Ambiental --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditGambiental
		@endslot
		@slot('titulo')
			Editar Gestión Ambiental
		@endslot
		@slot('action')
			{{ route('gambiental.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectGambiental" class="form-control" onchange="cambiarGambientalId()">
					@foreach($gambientales as $gambiental)
						<option value="{{$gambiental->id}}">{{$gambiental->GesName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoGambi" type="text" value="
			@foreach($gambientales as $gambiental)
				@if($loop->first)
					{{$gambiental->id}}
				@endif
			@endforeach
			" name="idocultoGambi" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="GesName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="GesType" class="text-center form-control" required="">
					<option value="0">Aspectos Ambientales</option>
					<option value="1">Impactos Ambientales</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Modal de edición de Recursos --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditRecursos
		@endslot
		@slot('titulo')
			Editar Recurso
		@endslot
		@slot('action')
			{{ route('recursos.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectRecurso" class="form-control" onchange="cambiarRecursoId()">
					@foreach($recursos as $recurso)
					<option value="{{$recurso->id}}">{{$recurso->RecName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoRec" type="text" value="
			@foreach($recursos as $recurso)
				@if($loop->first)
					{{$recurso->id}}
				@endif
			@endforeach
			" name="idocultoRec" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="RecName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="RecType" class="text-center form-control" required="">
					<option value="0">Fisico</option>
					<option value="1">Humano</option>
					<option value="2">Financiero</option>
				</select>
			</div>
		@endslot
	@endcomponent




	{{-- Seccion de modales de DELETE --}}



	{{-- Modal de eliminar recursos --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteRecursos
		@endslot
		@slot('idform')
			formDeleteRecursos
		@endslot
		@slot('titulo')
			Eliminar Recurso
			@endslot
		@slot('action')
			{{ route('recursos.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarRecursos" class="form-control" onchange="eliminarRecurso()">
						<option value="0" selected>Seleccionar recurso a Eliminar</option>
						@foreach($recursosDrop as $recursoDrop)
						<option value="{{$recursoDrop->id}}">{{$recursoDrop->RecName}}
							@switch($recursoDrop->RecType)
								@case(0)
								Fisico
								@case(1)
								Humano
								@case(2)
								Financiero
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteRecursos" disabled id="eliminarSubmitRecursos" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar gestión de seguridad y salud en el trabajo --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteGseguridad
		@endslot
		@slot('idform')
			formDeleteGseguridades
		@endslot
		@slot('titulo')
			Eliminar Gestión de Seguridad y Salud en el Trabajo
			@endslot
		@slot('action')
			{{ route('gseguridad.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarGsegu" class="form-control" onchange="eliminarGseguridad()">
						<option value="0" selected>Seleccionar Gestión de SST a Eliminar</option>
						@foreach($gseguridadesDrop as $gseguridadDrop)
						<option value="{{$gseguridadDrop->id}}">{{$gseguridadDrop->SeguName}} -
							@switch($gseguridadDrop->SeguType)
								@case(0)
									Peligros
									@break
								@case(1)
									Riesgos
									@break
								@case(2)
									Controles Operacionales
									@break
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteGseguridades" disabled id="eliminarSubmitGseguridades" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar gestión ambiental --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteGambiental
		@endslot
		@slot('idform')
			formDeleteGambientales
		@endslot
		@slot('titulo')
			Eliminar Gestión Ambiental
			@endslot
		@slot('action')
			{{ route('gambiental.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarGambi" class="form-control" onchange="eliminarGambiental()">
						<option value="0" selected>Seleccionar Gestión Ambiental a Eliminar</option>
						@foreach($gambientalesDrop as $gambientalDrop)
						<option value="{{$gambientalDrop->id}}">{{$gambientalDrop->GesName}} -
							@switch($gambientalDrop->GesType)
								@case(0)
									Aspectos Ambientales
									@break
								@case(1)
									Impactos Ambientales
									@break
								@case(2)
									Controles Operacionales
									@break
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteGambientales" disabled id="eliminarSubmitGambientales" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent



@endsection




{{-- librerias adicionales para el funcionmiento de la vista --}}
@push('js')
	{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
	<script src="{{ asset('js') }}/select2.js"></script>
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
	/*script para activar el select 2*/
	$(document).ready(function() {
		$('select').select2({
			placeholder: 'Selecciona...',
		});
	});

	// Parte de los script de actualizar 

	function cambiarRecursoId(){
		var id = $('#IdSelectRecurso').val();
		var inputoculto = $('#idocultoRec');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarGambientalId(){
		var id = $('#IdSelectGambiental').val();
		var inputoculto = $('#idocultoGambi');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarGseguridadId(){
		var id = $('#IdSelectGseguridad').val();
		var inputoculto = $('#idocultoGsegu');
		inputoculto.attr('value', id);
		// console.log(id);
	};


	/*Parte de los scripts de ELIMINAR*/


	function eliminarRecurso(){
		let formulario = $('#formDeleteRecursos');
		let botonsubmit = $('#eliminarSubmitRecursos');
		var id = $('#SelectEliminarRecursos').val();
		formulario.attr('action', '{{ url('recursos') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarGambiental(){
		let formulario = $('#formDeleteGambientales');
		let botonsubmit = $('#eliminarSubmitGambientales');
		var id = $('#SelectEliminarGambi').val();
		formulario.attr('action', '{{ url('gambiental') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarGseguridad(){
		let formulario = $('#formDeleteGseguridades');
		let botonsubmit = $('#eliminarSubmitGseguridades');
		var id = $('#SelectEliminarGsegu').val();
		formulario.attr('action', '{{ url('gseguridad') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

</script>
<script>
	$(document).ready( function(){
		$('option:selected').each(function(){ $(this).prop('selected',true); });
	})

	var contadorPoliticas = 0;
	function addPolitica(){
		contadorPoliticas++
		container = $('#containerDePoliticas')
		container.append(`<div class="col-md-6 col-xs-12" id="politicaOperacion`+contadorPoliticas+`">
						<div class="form-group">
							<label class="input-label" for="ProcPolitOperacion`+contadorPoliticas+`">Politica de Operación</label>
							<div class="input-group">
								<input type="text" required id="ProcPolitOperacioninput`+contadorPoliticas+`" class="form-control" placeholder="Politica de Operación" aria-label="Politica de Operación" aria-describedby="button-addon2" name="ProcPolitOperacion[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropPolitica(`+contadorPoliticas+`)">Borrar</button>
								</div>
							</div>
						</div>
					</div>`)
	};

	function dropPolitica(id){
		var id = $('#politicaOperacion'+id).remove();
	};
</script>


<script type="text/javascript">
	var contadorRiesgos = 0;
	function addRiesgo(){
		contadorRiesgos++
		container = $('#containerDeRiesgos')
		container.append(`<div class="col-md-6 col-xs-12" id="riesgos`+contadorRiesgos+`">
						<div class="form-group">
							<label class="input-label" for="ProcRiesgos`+contadorRiesgos+`">Riesgos</label>
							<div class="input-group">
								<input type="text" required id="ProcRiesgosinput`+contadorRiesgos+`" class="form-control" placeholder="Riesgos" aria-label="Riesgos" aria-describedby="button-addon2" name="ProcRiesgos[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropRiesgo(`+contadorRiesgos+`)">Borrar</button>
								</div>
							</div>
						</div>
					</div>`)
	};

	function dropRiesgo(id){
		var id = $('#riesgos'+id).remove();
	};
</script>


<script>
$(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('div.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});
var dropUp = function() {
    var windowHeight = $(window).innerHeight();
    var pageScroll = $('body').scrollTop();

    $( ".dropleft" ).each( function() {
        var offset = $( this ).offset().top;
        var space = windowHeight - ( offset - pageScroll );

        if( space < 150 ) {
            $( this ).addClass( "dropup" );
        } else  {
            $( this ).removeClass( "dropup" );
        }
    });
}

$(window).load(dropUp);
$(window).bind('resize scroll mousewheel', dropUp);
</script>

@endpush