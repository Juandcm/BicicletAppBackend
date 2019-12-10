@extends('plantillas.fuera_session')

@section('contenido')
<div class="center-sign">
    <a href="/" class="logo pull-left">
        <img src="{{ asset('img/logo.png') }}" height="54" alt="Porto Admin" />
    </a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo para restaurar la contraseña') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un enlace de verificación a su correo.') }}
                        </div>
                    @endif
                    {{ __('Si no has recibido el correo') }}, 

                    <a href="{{ route('verification.resend') }}">    
                        {{ __('intentar de nuevo') }}
                    </a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
