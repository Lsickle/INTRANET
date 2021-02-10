@extends('layouts.app', ['page' => __('Gestión Ambiental'), 'pageSlug' => 'dashboard'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Compromisos
@endsection

@section('content')

<div class="card">
    <img src="white/img/GA.jpg" width="80" height="80" class="pull-left">
    <h2 class="text-center title-gestion">Cuadro de compromisos</h2>
</div>

<div class="card text-center">
    <div class="text-center mx-0 px-0">
        <iframe width="1024" height="768" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=C2421B24BB4BB872%217629&authkey=%21AMIalQVQT1ZoGjc&em=2&wdAllowInteractivity=False&ActiveCell='testPAGE'!A1&wdInConfigurator=True"></iframe>
    </div>
</div>

@endsection