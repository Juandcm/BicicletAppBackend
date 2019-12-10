@extends('plantillas.fuera_session')

@section('contenido')
<div class="center-sign">
	<a href="/" class="logo pull-left">
		<img src="{{ asset('img/logo.png') }}" height="54" alt="Porto Admin" />
	</a>

	<div class="panel panel-sign">
		<div class="panel-title-sign mt-xl text-right">
			<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Restaurar contraseña</h2>
		</div>
		<div class="panel-body">
			<form method="POST" action="{{ route('password.update') }}">
			@csrf
			<input type="hidden" name="token" value="{{ $token }}">

				<div class="form-group mb-lg">
					<label>Correo</label>
					<input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				</div>

				<div class="form-group mb-none">
					<div class="row">
						<div class="col-sm-6 mb-lg">
							<label>Nueva Contraseña</label>
							
							<input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

						</div>
						<div class="col-sm-6 mb-lg">
							<label>Confirma la contraseña</label>
							<input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required autocomplete="new-password">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 text-center">
						<button type="submit" class="btn btn-primary hidden-xs">Restaurar contraseña</button>
						<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Restaurar contraseña</button>
					</div>
				</div>

				<span class="mt-lg mb-lg line-thru text-center text-uppercase">
					<span>o</span>
				</span>

				<p class="text-center">¿Ya tienes cuenta? <a href="{{ route('login') }}">Ingresar</a>

				</form>
			</div>
		</div>

		<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019. All Rights Reserved.</p>
</div>
@endsection