@component('mail::message')

# Se ha creado una nueva alerta: <strong>{{$alert->AlertName}}</strong> 
<br> para el día {{date_format($alert->AlertDateEvent, 'd-m-Y')}}.
<br><br><strong><center>para más detalles puede usar el botón a continuación</center></strong> 

@component('mail::button', ['url' => url('/alerts')])
Ver Alerta
@endcomponent

@endcomponent