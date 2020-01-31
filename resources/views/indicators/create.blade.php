@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
  <div class="card">
  	<div class="card-header text-center">
  	  <h3 class="card-title"><strong>Creación de Indicadores</strong></h3>
  	</div>

      <div class="modal-body">
          <form role="form" method="POST" action="{{ route('indicators.store') }}" enctype="multipart/form-data">
            	@csrf
              <div class="form-group">
                <label>Nombre del Indicador</label>
                <input name="IndName" type="text" class="text-center form-control" required>
              </div>
              <div class="form-group">
                <label>Objetivo del Indicador</label>
                <input name="IndObjective" type="text" class="text-center form-control" required>
              </div>
              <div class="form-group">
                <label>¿Qué mide?</label>
                <input name="IndQueMide" type="text" class="text-center form-control" required>
              </div>		
              <div class="custom-input-file">
                <label>Gráfica</label>
                <input name="IndGraphic" type="file" class="form-control" required="">
              </div>
              <div class="custom-input-file">
                <label>Tabla (Archivo)</label>
                <input name="IndTable" type="file" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Analisis</label>
                <input name="IndAnalysis" type="text" class="text-center form-control" required>
              </div>
              <div class="form-group">
                <label>Fecha Inicio</label>
                <input name="IndDateFrom" type="date" class="text-center form-control" required>
              </div>
              <div class="form-group">
                <label>Fecha Fin</label>
                <input name="IndDateUntil" type="date" class="text-center form-control" required>
              </div>
              <div class="form-group">
                <label>Tipo de Indicador</label>
                <select class="text-center form-control" required="" name="IndType" id="IndType">
                  <option value="0">Estrategico</option>
                  <option value="1">General</option>
                </select>
              </div>
                <button type="submit" class="btn btn-fill btn-success fas fa-plus"> Crear</button>
          </form>
      </div>
  </div>
@endsection