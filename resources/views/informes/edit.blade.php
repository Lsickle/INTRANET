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
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h3 class="card-title"><strong>Editar Informe</strong></h3>
                </div>
                <div class="col-md-2">
                    @can('deleteInformes')
                    <form action="{{ route('informes.destroy', $informe) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="fas fa-backspace btn btn-danger"> Eliminar</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
      <div class="box-body" style="margin: 1em 1em 1em 1em;">
          <form role="form" method="POST" action="{{ route('informes.update', $informe) }}">
            	@method('PUT')
              @csrf
              <div class="form-group{{ $errors->has('InfoName') ? ' has-danger' : '' }}">
                <label>Nombre</label>
                <input maxlength="200" name="InfoName" type="text" value="{{ old('InfoName') ? old('InfoName') : $informe->InfoName}}" class="text-center form-control form-control-alternative{{ $errors->has('InfoName') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'InfoName'])
              </div>
              <div class="form-group{{ $errors->has('InfoLink') ? ' has-danger' : '' }}">
                <label>Link</label>
                <input maxlength="800" name="InfoLink" type="text" value="{{ old('InfoLink') ? old('InfoLink') : $informe->InfoLink}}" class="text-center form-control form-control-alternative{{ $errors->has('InfoLink') ? ' is-invalid' : '' }}">
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