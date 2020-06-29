@extends('layouts.app', ['page' => __('Informes'), 'pageSlug' => 'Informes'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
{{$informe->InfoName}}
@endsection

@push('css')
@endpush

@section('content')
	<div class="card">
		<div class="card-header text-center">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{$informe->id}}/edit" class="btn btn-sm btn-warning float-left"> Editar</a>
                </div>
                <div class="col-md-8">
                    <h3 class="card-title"><strong>{{$informe->InfoName}}</strong></h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('informes.index') }}" class="btn btn-sm btn-success float-right"> Volver</a>
                </div>
            </div>
        </div>

        @include('alerts.success')
		<div class="card-body mx-auto">
            <iframe src="{{$informe->InfoLink}}" width="1024" height="600" frameborder="0" scrolling="yes"></iframe>
        </div>
	</div>
@endsection

@push('js')
@endpush

@push('scripts')
<script type="text/javascript">
</script>
@endpush