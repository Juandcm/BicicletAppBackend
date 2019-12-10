@extends('plantillamejor.fuera_session')

@section('contenido')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset( 'assets/images/big/auth-bg.jpg' )}}) no-repeat center center;">
	<div class="auth-box">

		<div id="loginform">
			<div class="logo">
				<span class="db"><img src="{{ asset( 'assets/images/logo-icon.png' )}}" alt="logo" /></span>
				<h5 class="font-medium m-b-20">Recuperar contraseña</h5>
				<span>¡Ingrese su correo electrónico y le enviaremos las instrucciones!</span>
			</div>
			<div class="row m-t-20">
				<!-- Form -->
				<form method="POST" class="col-12"  action="{{ route('password.email') }}">
					@csrf
					<!-- email -->
					<div class="form-group row">
						<div class="col-12">
							<input class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					<!-- pwd -->
					<div class="row m-t-20">
						<div class="col-12">
							<button class="btn btn-block btn-lg btn-danger" type="submit" name="action">¡Enviar correo!</button>
						</div>
					</div>

					<div class="form-group m-b-0 m-t-10">
						<div class="col-sm-12 text-center">
							<p>Regresar al <a href="{{ route('login') }}" id="to-login" class="text-info m-l-5">Inicio</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
@endsection