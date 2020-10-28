@extends('layouts.app', ['page' => __('Inicio'), 'pageSlug' => 'Home'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Home
@endsection

@section('content')
<div class="row align-items-center">
	<div class="col-md-6">
		<div class="div-slider-pro">
			<div class="col-md-12 card-body">
				<h1 class="card-title text-center col-md-12">NOVEDADES <strong>PROSARC</strong></h1>
				<div class="slider-pro" id="my-slider">
					<div class="sp-slides">
						<!-- Slide 1 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;" src="white/img/DJI_0127.jpg"
								alt="First slide">

							<a href="/nosotros">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-width="200" data-horizontal="15%" data-vertical="28%"
									data-show-transition="right" data-hide-transition="up" data-show-delay="500">
									Conoce PROSARC
								</p>
							</a>
						</div>
						<!-- Slide 2 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;" src="white/img/bombero.png"
								alt="Second slide">
						</div>
						<!-- Slide 3 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;"
								src="{{(($indicator->IndGraphic == '') || ($indicator->IndGraphic == Null)) ? 'white/img/no_image.png' : Storage::url($indicator->IndGraphic)}}">
							<a href="indicators/{{$indicator->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($indicator->created_at == $indicator->updated_at)
									Nuevo Indicador
									@else
									Indicador actualizado
									@endif
								</p>
							</a>

							<a href="indicators/{{$indicator->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$indicator->IndName}}
								</p>
							</a>
						</div>
						<!-- Slide 4 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;"
								src="{{($comitesCarousel->ComiImage == '') || ($comitesCarousel->ComiImage == Null) ? 'white/img/no_image.png' : Storage::url($comitesCarousel->ComiImage)}}"
								alt="Fourth slide">
							<a href="comites/{{$comitesCarousel->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($comitesCarousel->created_at == $comitesCarousel->updated_at)
									Nuevo Comite
									@else
									Comite actualizado
									@endif
								</p>
							</a>

							<a href="comites/{{$comitesCarousel->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$comitesCarousel->ComiName}}
								</p>
							</a>
						</div>
						<!-- Slide 5 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;"
								src="{{($release->RelSrc == '') || ($release->RelSrc == Null) ? 'white/img/no_image.png' : Storage::url($release->RelSrc)}}"
								alt="Five slide">
							<a href="releases/{{$release->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($release->created_at == $release->updated_at)
									@if($release->RelType === 'Comunicado')
									Nuevo {{$release->RelType}}
									@else
									Nueva {{$release->RelType}}
									@endif
									@else
									@if($release->RelType === 'Comunicado')
									{{$release->RelType}} actualizado
									@else
									{{$release->RelType}} actualizada
									@endif
									@endif
								</p>
							</a>

							<a href="releases/{{$release->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$release->RelName}}
								</p>
							</a>
						</div>
						<!-- Slide 6 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;" src="white/img/docu.jpg"
								alt="Six slide">
							<a href="documents/{{$document->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($document->created_at == $document->updated_at)
									Nuevo Documento
									@else
									Documento actualizado
									@endif
								</p>
							</a>

							<a href="documents/{{$document->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$document->DocName}}
								</p>
							</a>
						</div>
						<!-- Slide 7 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;" src="white/img/requisito.png"
								alt="Six slide">
							<a href="requisitos/{{$requisito->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($requisito->created_at == $requisito->updated_at)
									Nuevo Requisito
									@else
									Requisito actualizado
									@endif
								</p>
							</a>

							<a href="requisitos/{{$requisito->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$requisito->ReqName}}
								</p>
							</a>
						</div>
						<!-- Slide 8 -->
						<div class="sp-slide">
							<img class="sp-image" style="border-radius: 5px !important;" @if($proceso->ProcImage == "")
							src="/white/img/no_image.png"
							@else
							src="{{Storage::url($proceso->ProcImage)}}"
							@endif
							alt="Six slide">
							<a href="proceso/{{$proceso->id}}">
								<p class="sp-layer sp-black sp-rounded sp-padding specialshadow1 specialshadow1hover specialshadow1click"
									style="color:white;" data-position="centerCenter" data-show-transition="left"
									data-show-delay="500" data-vertical="-50" data-hide-transition="left"
									data-show-duration="750">
									@if ($proceso->created_at == $proceso->updated_at)
									Nuevo Proceso
									@else
									Proceso actualizado
									@endif
								</p>
							</a>

							<a href="proceso/{{$proceso->id}}">
								<p class="sp-layer sp-white sp-rounded sp-padding hide-small-screen specialshadow2 specialshadow2hover specialshadow2click"
									data-position="centerCenter" data-show-transition="right" data-show-delay="500"
									data-vertical="50" data-hide-transition="right" data-show-duration="750">
									{{$proceso->ProcName}}
								</p>
							</a>
						</div>
					</div>
					<div class="sp-thumbnails">
						<!-- thumbnail 1 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image" src="white/img/DJI_0127.jpg" />
							<p class="sp-thumbnail-text">Conoce PROSARC S.A. ESP</p>
						</div>

						<!-- thumbnail 2 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image" src="white/img/bombero.png" />
							<p class="sp-thumbnail-text">Numeros de Emergencia</p>
						</div>

						<!-- thumbnail 3 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image"
								src="{{($indicator->IndGraphic == '') || ($indicator->IndGraphic == Null) ? 'white/img/no_image.png' : Storage::url($indicator->IndGraphic)}}" />
							<p class="sp-thumbnail-text">
								@if ($indicator->created_at == $indicator->updated_at)
								Nuevo Indicador
								@else
								Indicador actualizado
								@endif
							</p>
						</div>

						<!-- thumbnail 4 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image"
								src="{{($comitesCarousel->ComiImage == '') || ($comitesCarousel->ComiImage == Null) ? 'white/img/no_image.png' : Storage::url($comitesCarousel->ComiImage)}}" />
							<p class="sp-thumbnail-text">
								@if ($comitesCarousel->created_at == $comitesCarousel->updated_at)
								Nuevo Comite
								@else
								Comite actualizado
								@endif
							</p>
						</div>

						<!-- thumbnail 5 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image"
								src="{{($release->RelSrc == '') || ($release->RelSrc == Null) ? 'white/img/no_image.png' : Storage::url($release->RelSrc)}}" />
							<p class="sp-thumbnail-text">
								@if ($release->created_at == $release->updated_at)
								@if($release->RelType === 'Comunicado')
								Nuevo {{$release->RelType}}
								@else
								Nueva {{$release->RelType}}
								@endif
								@else
								@if($release->RelType === 'Comunicado')
								{{$release->RelType}} actualizado
								@else
								{{$release->RelType}} actualizada
								@endif
								@endif
							</p>
						</div>

						<!-- thumbnail 6 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image" src="white/img/docu.jpg" />
							<p class="sp-thumbnail-text">
								@if ($document->created_at == $document->updated_at)
								Nuevo Documento
								@else
								Documento actualizado
								@endif
							</p>
						</div>

						<!-- thumbnail 7 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image" src="white/img/requisito.png" />
							<p class="sp-thumbnail-text">
								@if ($requisito->created_at == $requisito->updated_at)
								Nuevo Requisito
								@else
								Requisito actualizado
								@endif
							</p>
						</div>

						<!-- thumbnail 8 -->
						<div class="sp-thumbnail">
							<img class="sp-thumbnail-image" src="white/img/requisito.png" />
							<p class="sp-thumbnail-text">
								@if ($proceso->created_at == $proceso->updated_at)
								Nuevo Proceso
								@else
								Proceso actualizado
								@endif
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card" style="max-width: 540px;">
			<div class="row no-gutters">
				<div class="col-4 px-3 my-auto">
					<a href="{{ route('prosarc.nosotros') }}"><img src="white/img/logo.png" class="card-img"
							alt="Logo Prosarc"></a>
				</div>
				<div class="col-8 text-right">
					<div class="card-body">
						<h4 class="card-title">
							<b><a href="{{ route('prosarc.nosotros') }}" class="btn btn-info btn-sm"><small>Acerca de
										Prosarc</small></a></b>
						</h4>
						<p class="card-text">Página con información de generalidades, misión, visión, objetivos,
							políticas, mapa de procesos, entre otros.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card" style="max-width: 540px;">
			<div class="row no-gutters">
				<div class="col-4 px-3 my-auto">
					<a href="{{ route('requisitos.index') }}"><img src="white/img/RL.jpg" class="card-img"
							alt="requisitos image"></a>
				</div>
				<div class="col-8 text-right">
					<div class="card-body">
						<h4 class="card-title">
							<b><a href="{{ route('requisitos.index') }}" class="btn btn-info btn-sm"><small>Lista de
										Requisitos</small></a></b>
						</h4>
						<p class="card-text">Lista de requisitos que deben ser cumplidos por la empresa.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card"
			style="background-image: linear-gradient(to bottom right, rgb(230, 244, 255), rgb(243, 250, 255), rgb(250, 253, 255), white); border-radius: 7px; box-shadow: inset 3px 3px 3px rgba(255,255,255,.7), inset -2px -2px 3px rgba(0,0,0,.1), 7px 7px 8px gray; border: 1px solid silver; margin: 0em 0em 3em 0em;">
			<div class="card-header text-center py-0"
				style="border-radius: 7px 7px 0px 0px; background-image: linear-gradient(#0092e0, #0066a0, #003355);">
				<h3 class="my-2 text-white">Nuestra Gestión</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-3"><a href="{{ route('prosarc.GHumana') }}"
							class="btn btn-info btn-info-bisel text-white w-100 px-md-2">Gestión Humana</a></div>
					<div class="col-md-3"><a href="{{ route('prosarc.GAmbiental') }}"
							class="btn btn-info btn-info-bisel text-white w-100 px-md-2">Gestión Ambiental</a></div>
					<div class="col-md-3"><a href="{{ route('prosarc.GCalidad') }}"
							class="btn btn-info btn-info-bisel text-white w-100 px-md-2">Gestión de Calidad</a></div>
					<div class="col-md-3"><a href="{{ route('prosarc.SST') }}"
							class="btn btn-info btn-info-bisel text-white w-100 px-md-2">SST</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card"
			style="background-image: linear-gradient(to bottom right, rgb(222, 255, 219), rgb(236, 255, 232), rgb(232, 255, 232), white); border-radius: 7px; box-shadow: inset 3px 3px 3px rgba(255,255,255,.7), inset -2px -2px 3px rgba(0,0,0,.1), 7px 7px 8px gray; border: 1px solid silver; margin: 0em 0em 3em 0em;">
			<div class="card-header text-center py-0"
				style="border-radius: 7px 7px 0px 0px; background-image: linear-gradient(#23af00, #0b8000, #115500);">
				<h3 class="my-2 text-white">Comites</h3>
			</div>
			<div class="card-body">
				<div class="row">
					@foreach($comites as $comite)
					<div class="col-md-3">
						<div class="card">
							@if($comite->ComiSrc === "")
							<img src="/white/img/empresa.jpg">
							@else
							<img alt="logo del Comite" src="{{Storage::url($comite->ComiSrc)}}">
							@endif
							<div class="card-body">
								<p class="card-text">
									<h6><b>Objetivo:</b></h6> {{$comite->ComiParaQueSirve}}.
								</p>
								<a href="comites/{{$comite->id}}" class="btn btn-primary btn-sm float-right"><b>{{$comite->ComiName}}</b></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

{{-- <div class="text-center">
	<div class="div-conoce-pro">
		<h2 class="text-center">Nuestra Gestión</h2>
		<div class="row">
			<div class="col-md-3 mx-auto">
				<a href=""><img src="white/img/GH.jpg" class="botones-conoce"></a>
				<br>
				<h4>Gestión Humana</h4>
			</div>

			<div class="col-md-3 mx-auto">
				<a href="{{ route('prosarc.GAmbiental') }}"><img src="white/img/GA.jpg" class="botones-conoce"></a>
<br>
<h4>Gestión Ambiental</h4>
</div>

<div class="col-md-3 mx-auto">
	<a href="{{ route('prosarc.GCalidad') }}"><img src="white/img/GC.jpg" class="botones-conoce"></a>
	<br>
	<h4>Gestión de Calidad</h4>
</div>

<div class="col-md-3 mx-auto">
	<a href="{{ route('prosarc.SST') }}"><img src="white/img/SST.jpg" class="botones-conoce"></a>
	<br>
	<h4>Seguridad y salud <br> en el trabajo</h4>
</div>
</div>
</div>

<div class="div-comites-ahora text-center">
	<div class="col-lg-12">
		<h2 class="text-center">Comites PROSARC</h2>
		@foreach($comites as $comite)
		<a href="comites/{{$comite->id}}" class="btn btn-success">{{$comite->ComiName}}</a>
		@endforeach
		<br>
	</div>
</div>
</div> --}}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css') }}/sliderPro.css" />
@endpush

@push('js')
<script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
<script src="{{ asset('js') }}/sliderPro.js"></script>

<script type="text/javascript">
	$('#my-slider').sliderPro({
					width: 960, 
					height: 400,
					orientation: 'horizontal',
					thumbnailWidth: 0,
					thumbnailHeight: 0,
					buttons:false,
					arrows: false,
					keyboard: true,
					waitForLayers: true,
					imageScaleMode: 'contain',
					centerImage: true,
					// fade: true,
					// fadeDuration:1000,
					fullScreen:true,
					breakpoints: {
						1100: {
							thumbnailWidth: 0,
							thumbnailHeight: 0,
							// thumbnailPointer:true,
						},
						800: {
							thumbnailsPosition: 'right',
							thumbnailWidth: 150,
							thumbnailHeight: 75,
							thumbnailPointer:true,
						},
						500: {
							orientation: 'vertical',
							// thumbnailsPosition: 'bottom',
							// thumbnailPointer:true,
							thumbnailWidth: 0,
							thumbnailHeight: 0
						}
					}
				});
</script>
@endpush