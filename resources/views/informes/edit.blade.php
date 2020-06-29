@extends('layouts.app', ['page' => __('Informes'), 'pageSlug' => 'Informes'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
informes
@endsection

@section('content')
  <div class="card">
  	<div class="card-header text-center">
  	  <h3 class="card-title"><strong>Editar Informe</strong></h3>
  	</div>
      <div class="box-body" style="margin: 1em 1em 1em 1em;">
          <form id="formActualiIndicado" role="form" method="POST" action="{{ route('indicators.update', $indicator) }}">
            	@method('PUT')
              @csrf
              <div class="form-group{{ $errors->has('InfoName') ? ' has-danger' : '' }}">
                <label>Nombre</label>
                <input maxlength="200" name="InfoName" type="text" value="{{ old('InfoName') ? old('InfoName') : $indicator->InfoName}}" class="text-center form-control form-control-alternative{{ $errors->has('InfoName') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'InfoName'])
              </div>
              <div class="form-group{{ $errors->has('InfoLink') ? ' has-danger' : '' }}">
                <label>Link</label>
                <input maxlength="800" name="InfoLink" type="text" value="{{ old('InfoLink') ? old('InfoLink') : $indicator->InfoLink}}" class="text-center form-control form-control-alternative{{ $errors->has('InfoLink') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'InfoLink'])
              </div>
                <button type="submit" class="fas fa-arrow-circle-up btn btn-fill btn-success"> Actualizar</button>
          </form>
      </div>
  </div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush