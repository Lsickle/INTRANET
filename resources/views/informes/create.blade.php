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
  	  <h3 class="card-title"><strong>Carga de Informe</strong></h3>
  	</div>

      <div class="modal-body">
          <form role="form" method="POST" action="{{ route('informes.store') }}">
            	@csrf
              <div class="form-group{{ $errors->has('InfoName') ? ' has-danger' : '' }}">
                <label>Nombre</label>
                <input placeholder="Informe de Incineración" maxlength="200" value="{{ old('InfoName') }}" name="InfoName" type="text" class="text-center form-control form-control-alternative{{ $errors->has('InfoName') ? ' is-invalid' : '' }}" required>
                @include('alerts.feedback', ['field' => 'InfoName'])
              </div>

              <div class="form-group{{ $errors->has('InfoLink') ? ' has-danger' : '' }}">
                <label>link</label>
                <input placeholder="https://onedrive.live.com/embed?cid=C2421B24BB4BB872&resid=C2421B24BB4BB872%216887&authkey=AH-eik6VViNfZDQ&em=2" maxlength="200" value="{{ old('InfoLink') }}" name="InfoLink" type="text" class="text-center form-control form-control-alternative{{ $errors->has('InfoLink') ? ' is-invalid' : '' }}" required>
                @include('alerts.feedback', ['field' => 'InfoLink'])
              </div>
                <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
          </form>
      </div>
  </div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush