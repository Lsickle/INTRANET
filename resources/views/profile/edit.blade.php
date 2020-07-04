@extends('layouts.app', ['page' => __('Perfil'), 'pageSlug' => 'profile'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Perfil de usuario
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title pull-left">{{ __('Edit Profile') }}</h5>
                    {{-- <button class="btn btn-primary pull-right">Editar roles</button> --}}
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nombre</b>" data-content="Nombre del usuario."><i class="far fa-question-circle"></i>{{ __(' Nombre') }}</label>

                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">

                                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Correo Electronico</b>" data-content="Correo Electronico corresondiente al actual usuario."><i class="far fa-question-circle"></i>{{ __(' Correo Electronico') }}</label>

                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])

                            </div>

                            {{-- <div class="form-group{{ $errors->has('Avatar') ? ' has-danger' : '' }}">
                                <label>{{ __('  ') }}</label>
                                <input type="file" id="Avatar" name="Avatar" class="form-control{{ $errors->has('Avatar') ? ' is-invalid' : '' }}" placeholder="{{ __('Avatar') }}" value="{{ old('Avatar', auth()->user()->Avatar) }}">
                                @include('alerts.feedback', ['field' => 'Avatar'])
                            </div> --}}
                            <div class="custom-input-file {{ $errors->has('Avatar') ? ' has-danger' : '' }}">
                                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Foto de perfil</b>" data-content="Adjuntar Foto de perfil. Este archivo debe ser de tipo: jpg, jpeg, png."><i class="far fa-question-circle"></i> Foto de perfil</label>
                                <input id="Avatar" name="Avatar" type="file" class="form-control form-control-alternative{{ $errors->has('Avatar') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'Avatar'])
                                    @if(auth()->user()->Avatar === "")
                                    <a href="#"><img id="AvatarOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/></a>
                                @else
                                    <a href="{{Storage::url(auth()->user()->Avatar)}}" target="_blank"> <img id="AvatarOutput" src="{{Storage::url(auth()->user()->Avatar)}}" alt="imagen no valida" width="200px" class="d-block"/></a>
                                @endif
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Guardar') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Contraseña') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Contraseña Actual</b>" data-content="Ingrese la contraseña actual de su usuario."><i class="far fa-question-circle"></i>{{ __(' Contraseña Actual') }}</label>

                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña Actual') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nueva Contraseña</b>" data-content="Ingresar la nueva contraseña que desea asignar al usuario"><i class="far fa-question-circle"></i>{{ __(' Nueva Contraseña') }}</label>

                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva Contraseña') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])

                        </div>
                        <div class="form-group">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Confirmar Nueva Contraseña</b>" data-content="Ingresar la confirmación de contraseña del campo anterior."><i class="far fa-question-circle"></i>{{ __(' Confirmar Nueva Contraseña') }}</label>
                            
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Nueva Contraseña') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Cambiar Contraseña') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            @php
                            $colorblock="";
                            @endphp
                            @switch(Auth::user()->ColorUser)
                                @case(0)
                                    @php
                                    $colorblock="primary";
                                    @endphp
                                    @break
                                @case(1)
                                    @php
                                    $colorblock="blue";
                                    @endphp
                                    @break
                                @case(2)
                                    @php
                                    $colorblock="green";
                                    @endphp
                                    @break
                                @case(3)
                                    @php
                                    $colorblock="red";
                                    @endphp
                                    @break
                                @case(4)
                                    @php
                                    $colorblock="yellow";
                                    @endphp
                                    @break
                                @default
                                    @php
                                    $colorblock="green";
                                    @endphp
                            @endswitch
                            <div class="block block-one-{{$colorblock}}" id="colors1"></div>
                            <div class="block block-two-{{$colorblock}}" id="colors2"></div>
                            <div class="block block-three-{{$colorblock}}" id="colors3"></div>
                            <div class="block block-four-{{$colorblock}}" id="colors4"></div>
                            @if (auth()->user()->Avatar == 'robot400x400.gif')
                            <img class="avatar" class="rounded img-fluid" style="width: auto; max-height: 100%;" src="{{ asset('white/img/robot400x400.gif') }}" alt="{{ __('Profile Photo')}}">
                            @else
                            <img class="avatar" class="rounded img-fluid" style="width: auto; max-height: 100%;" src="{{ Storage::url(auth()->user()->Avatar) }}" alt="{{ __('Profile Photo')}}">
                            @endif
                            <p class="description">
                                {{-- {{ __('Ceo/Co-Founder') }} --}}
                            </p>
                        </div>
                    </p>
                </div>
                <div class="card-footer">
                    {{-- <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function (e) {
        var output = $('#'+input.id+'Output');
        output.attr('src', e.target.result);
        output.attr('class', 'd-block');
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $('input[type="file"]').change(function(){
    readURL(this);
  });
</script>
@endpush