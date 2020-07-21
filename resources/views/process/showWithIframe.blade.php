@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])
@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection
@section('htmlheader_title')
Proceso de {{$proceso->ProcName}}
@endsection
@push('css')
{{--
<link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet" />
<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet" /> --}}
@endpush
@section('content')
	<div class="col-md-12 card degradado-procesos">
		<div class="row">
			<div class="col-md-2">
				@can('updateProcess')
					<a href="{{$proceso->id}}/edit" class="btn btn-sm btn-warning float-left"> Editar</a>
				@endcan
			</div>
			<div class="col-md-8">
			</div>
			<div class="col-md-2">
				@can('deleteProcess')
					<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$proceso->id}}">
						Eliminar
					</button>
					@component('layouts.partials.modal')
						@slot('id')
							{{$proceso->id}}
						@endslot
						@slot('textModal')
							{{$proceso->ProcName}}
						@endslot
						@slot('botonModal')
							<form action="{{ route('proceso.destroy', $proceso) }}" method="POST">
								@method('DELETE')
								@csrf 
								<button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
							</form>
						@endslot
					@endcomponent
				@endcan
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row color">
			<div class="col-md-3 margen" style="background-color:white;">
			<img src="{{asset('white/img/logo_nombre.png')}}" class="py-5">
			</div>
			<div class="col-md-5 text-center margen">
				<h4>CARACTERIZACIÓN DE PROCESO</h4><br>
				<h4>SISTEMA DE GESTIÓN INTEGRAL - HSEQ</h4>
			</div>
			<div class="col-md-4 text-center margen">
				<h4>FORMATO</h4><br>
				<div class="row">
					<div class="col-md-4 margen">
						<h4>HSEQ-04</h4>
					</div>
					<div class="col-md-4 margen">
						<h4>{{$proceso->ProcRevVersion}}</h4>
					</div>
					<div class="col-md-4 margen">
						<h4>{{$proceso->ProcDate}}</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<br><br>
		</div>

		<div class="row">
			<div class="col-md-3 margen">
				{{-- <img src="{{Storage::url($proceso->ProcImage)}}"> --}}
				@if($proceso->ProcImage === "")
				   <a href="/white/img/no_image.png"> <img src="/white/img/no_image.png" class="responsive"></a>
				@else
				   <a href="{{Storage::url($proceso->ProcImage)}}"> <img src="{{Storage::url($proceso->ProcImage)}}" class="responsive"></a>
				@endif
			</div>
			<div class="col-md-5 text-center margen">
				<br><h4>{{$proceso->ProcName}}</h4><br>
			</div>
			<div class="col-md-4 text-center margen">
				<br>
				@foreach($proceso->areas as $area)
					{{$area->AreaName}}<br>
				@endforeach
			</div>
		</div>

		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row text-center">
			<div class="col-md-6 margen">
				<h4>OBJETIVO</h4><br>
				<p>{{$proceso->ProcObjetivo}}</p>
			</div>
			<div class="col-md-3 margen">
				<h4>PARTICIPANTES</h4><br>
				<p>
					@foreach($proceso->ProcParticipantes as $participante)
						<li>{{$participante}}</li>
					@endforeach
				</p>
			</div>
			<div class="col-md-3 margen">
				<h4>RESPONSABLES</h4><br>
				<p>
					@foreach($proceso->ProcResponsable as $responsable)
						<li>{{$responsable}}</li>
					@endforeach
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row margen text-center">
			<div class="col-md-12">
				<h4>ALCANCE</h4><hr>
				<p>{{$proceso->ProcAlcance}}</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>

		<div class="row">
			<div class="border embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="{{$proceso->ProcLink}}" width="1024" height="600" frameborder="1" scrolling="yes"></iframe>
			</div>
		</div>

		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row margen">
			<div class="col-md-9 text-center margen color">
				<h4>RECURSOS</h4><br>
			</div>
			<div class="col-md-3 text-center margen color">
				<h4>AMBIENTE DE TRABAJO</h4>
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">FISICO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 0)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">HUMANO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 1)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">FINANCIERO</h4><br>
				@foreach($proceso->recursos as $recurso)
					@if($recurso->RecType == 2)
						<li>{{$recurso->RecName}}</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				<p>{{$proceso->ProcAmbienTrabajo}}</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 text-center margen color1">
				<h4>REQUISITOS Y REGULACIONES</h4>
			</div>

			<div class="col-md-3 margen">
				<h4 class="text-center">LEGALES</h4><br>
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">EMPRESARIALES</h4><br>
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">NORMAS TECNICAS COLOMBIANAS ISO</h4><br>
			</div>
			<div class="col-md-3 margen">
				<h4 class="text-center">OTRAS - CLIENTE</h4><br>
			</div>

			<div class="col-md-3 margen">
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 0)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 1)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 3)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
			<div class="col-md-3 margen">
				@foreach($proceso->requisitos as $requisito)
					@if($requisito->ReqType == 2)
						<li>
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								<a href='{{$requisito->ReqSrc}}'>{{$requisito->ReqName}}</a>
							@else
								<a href='{{$requisito->ReqLink}}'>{{$requisito->ReqName}}</a>
							@endif
						</li>
					@endif
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 text-center margen">
				<h4>RIESGOS</h4><hr>
				<div class="row">
					<div class="col-md-6 margen">
						<h4 class="text-center">DESCRIPCION DEL RIESGO</h4>
					</div>
					<div class="col-md-6 margen">
						<h4 class="text-center">ACCIONES AIMPLEMENTAR</h4>
					</div>
				</div>
				@foreach($proceso->riesgos as $riesgo)
				<div class="row">
					<div class="col-md-6 margen">
						<p>{{$riesgo->RiesgDescrip}}</p>
					</div>
					<div class="col-md-6 margen">
						<p>{{$riesgo->RiesgAction}}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">GESTIÓN AMBIENTAL</h4>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 margen">
						<h4 class="text-center">ASPECTOS AMBIENTALES</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">IMPACTOS AMBIENTALES</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">DESCRIPCIÓN</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">CONTROLES OPERACIONALES</h4>
					</div>
				</div>
			</div>
			@foreach($proceso->gambientals as $gambiental)
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 margen">
						<p>{{$gambiental->GesName}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gambiental->GesImpact}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gambiental->GesDescrip}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gambiental->GesControl}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color1">
				<h4 class="text-center">GESTIÓN EN SEGURIDAD Y SALUD EN EL TRABAJO</h4>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 margen">
						<h4 class="text-center">PELIGRO</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">RIESGO</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">DESCRIPCIÓN</h4>
					</div>
					<div class="col-md-3 margen">
						<h4 class="text-center">CONTROLES OPERACIONALES</h4>
					</div>
				</div>
			</div>
			@foreach($proceso->gseguridads as $gseguridad)
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 margen">
						<p>{{$gseguridad->SeguName}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gseguridad->SeguImpact}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gseguridad->SeguDescrip}}</p>
					</div>
					<div class="col-md-3 margen">
						<p>{{$gseguridad->SeguControl}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen text-center">
				<h4>POLITICA DE OPERACIÓN</h4><hr>
				<p>
					@foreach($proceso->ProcPolitOperacion as $operacion)
						<li>{{$operacion}}</li>
					@endforeach
				</p>
			</div>
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">INDICADORES</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Eficiencia</h4>
				<div class="row">
					<div class="col-md-6 margen text-center color1-1">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-1">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 0)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndMeta}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Eficacia</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-2">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-2">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 1)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div><hr>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndMeta}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>	
			<div class="col-md-4 margen">
				<h4 class="text-center">Efectividad</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-3">
						<h4>Indicador</h4>
					</div>
					<div class="col-md-6 margen text-center color1-3">
						<h4>Meta</h4>
					</div>
					@foreach($proceso->indicadores as $indicador)
						@if($indicador->IndEfe == 2)
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndName}}</a></li>
							</div>
							<div class="col-md-6">
								<li><a href="{{ route('indicators.show', $indicador) }}">{{$indicador->IndMeta}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>		
		</div>
		<div class="col-md-12">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-12 margen color">
				<h4 class="text-center">DOCUMENTOS APLICABLES</h4>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Manuales</h4>
				<div class="row">
					<div class="col-md-6 margen text-center color1-1">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-1">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Manuales' || 'Procedimientos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>
			<div class="col-md-4 margen">
				<h4 class="text-center">Instructivos</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-2">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-2">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Instructivos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>	
			<div class="col-md-4 margen">
				<h4 class="text-center">Formatos</h4>
				<div class="row margen">
					<div class="col-md-6 margen text-center color1-3">
						<h4>Nombre</h4>
					</div>
					<div class="col-md-6 margen text-center color1-3">
						<h4>Identificación</h4>
					</div>
					@foreach($proceso->documentos as $documento)
						@if($documento->DocType == 'Formatos')
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocName}}</a></li><hr>
							</div>
							<div class="col-md-6">
								<li><a href="{{Storage::url($documento->DocSrc)}}">{{$documento->DocIdentification}}</a></li><hr>
							</div>
						@endif
					@endforeach
				</div>
			</div>		
		</div>
		<div class="col-md-12">
			<br><br><br>
		</div>
		<div class="row color">
			<div class="col-md-4 margen text-center">
				<h4>Elaborado por</h4><br>
				{{$proceso->ProcElaboro}}
			</div>
			<div class="col-md-4 margen text-center">
				<h4>Revisado Por</h4><br>
				{{$proceso->ProcReviso}}
			</div>
			<div class="col-md-4 margen text-center">
				<h4>Aprobado Por</h4><br>
				{{$proceso->ProcAprobo}}
			</div>
		</div>
		<div class="col-md-12">
			<br><br><br>
		</div>
	</div>
@endsection
{{-- librerias adicionales para el funcionamiento de la vista --}}
@push('js')
{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
@endpush
{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
// $(document).ready(function() {
// 	console.log('vista cargada correctamente')
// });

</script>
@endpush
