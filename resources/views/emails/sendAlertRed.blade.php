@component('mail::message')
<div class="col-md-10 mx-auto">
	<img src="{{asset('white/img/alerta_roja.jpeg')}}">
</div>
<div class="col-md-12" style="background-color: rgba(255, 0, 0, .1); padding: 10px 10px 10px 10px;">
	<br>
	<div class="col-md-12 text-center">
		<h1 style="color: #000000;"><center>¡¡ALERTA ROJA!!</center></h1>
		<h3 style="color: #000000;"><center>Ya no tienes tiempo.</center></h3>
	</div>

	<strong style="color: #000000;">Recuerda</strong> 
	<br><font color="#000000">Tienes una alerta olvidada:</font> <strong style="color: #000000;">{{$alert->AlertName}}</strong> 
	<br><font color="#000000"> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.</font>
	<br><h3 style="color: #000000;">Descripción:</h3><font color="#000000" class="text-justify"> {{$alert->AlertDescription}}.</font>
	<br><br>
	<strong><center style="color: #000000;">¡¡¡HAZLO YA!!!</center></strong> 

	@component('mail::button', ['url' => url('/alerts')])
	Ver Alerta
	@endcomponent
</div>
<div class="col-md-10 mx-auto">
	<img src="{{asset('white/img/footer.png')}}">
</div>
@endcomponent