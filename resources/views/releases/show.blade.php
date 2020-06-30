@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
            <div class="row">
                <div class="col-md-2">
					@can('updateReleases')
						<a href="{{$release->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a>
					@else
						@if($release->user_id == Auth::user()->id)
							<a href="{{$release->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a>
						@else
							<a href="#" class="btn btn-default sw-btn-prev disabled not-allowed"> Editar</a>
						@endif
					@endcan
                </div>
                <div class="col-md-8">
                    <h3 class="card-title"><strong>Comunicados</strong></h3>
                </div>
                <div class="col-md-2">
					@can('deleteReleases')
							<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$release->id}}">
							  Eliminar
							</button>
							@component('layouts.partials.modal')
								@slot('id')
									{{$release->id}}
								@endslot
								@slot('textModal')
									{{$release->RelName}}
								@endslot
								@slot('botonModal')
									<form action="{{ route('releases.destroy', $release) }}" method="POST">
									  @method('DELETE')
									  @csrf 
									    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
									</form>
								@endslot
							@endcomponent
					@else
						@if($release->user_id == Auth::user()->id)
							<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$release->id}}">
							Eliminar
							</button>
							@component('layouts.partials.modal')
								@slot('id')
									{{$release->id}}
								@endslot
								@slot('textModal')
									{{$release->RelName}}
								@endslot
								@slot('botonModal')
									<form action="{{ route('releases.destroy', $release) }}" method="POST">
									  @method('DELETE')
									  @csrf 
									    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
									</form>
								@endslot
							@endcomponent
						@else
						<button type="button" class="btn btn-default disabled not-allowed fas fa-trash" data-toggle="modal" data-target="#">
						Eliminar
						</button>
						@endif
					@endcan
                </div>
            </div>
        </div>
		<div class="container">
			<div class="col-md-12 mx-auto">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Nombre</h4>
					</div>
					<div class="col-md-8 text-justify recuadro-2">
						<h4>{{$release->RelName}}</h4>
					</div>
				</div>
			</div>
			<div class="col-md-12 mx-auto">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Imagen</h4>
					</div>
					<div class="col-md-8 text-justify recuadro-2">
						@if($release->RelSrc === "")
						    <img src="/white/img/bloc.jpg">
						@else
						    <img class="resposive" src="{{Storage::url($release->RelSrc)}}">
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-12 mx-auto">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Mensaje</h4>
					</div>
					<div class="col-md-8 text-justify recuadro-2">
						<p> {{$release->RelMessage}} </p>
					</div>
				</div>
			</div>
			<div class="col-md-12 mx-auto">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Fecha de publicación</h4>
					</div>
					<div class="col-md-8 text-justify recuadro-2">
						<p> {{$release->RelDate}} </p>
					</div>
				</div>
			</div>
			<div class="col-md-12 mx-auto">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Tipo de Anuncio</h4>
					</div>
					<div class="col-md-8 text-justify recuadro-2">
						<p> {{$release->RelType}} </p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection