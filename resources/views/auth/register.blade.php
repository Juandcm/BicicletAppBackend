@extends('plantillamejor.fuera_session')

@section('contenido')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset( 'assets/images/big/auth-bg.jpg' )}}) no-repeat center center;">
	<div class="auth-box">

		<div id="loginform">
			<div class="logo">
				<span class="db"><img src="{{ asset( 'assets/images/logo-icon.png' )}}" alt="logo" /></span>
				<h5 class="font-medium m-b-20">Registro </h5>
			</div>
			<!-- Form -->
			<div class="row">
				<div class="col-12">


					<form class="form-horizontal m-t-20" id="loginform" method="POST" action="{{ route('register') }}">
						@csrf


						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
							</div>
							<input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" aria-describedby="basic-addon1" placeholder='Nombre' required autocomplete="name" autofocus>
							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>


						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
							</div>
							<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autofocus>						
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
							</div>
							<input class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" type="password" placeholder="Constraseña" aria-label="Constraseña" aria-describedby="basic-addon1" name="password" required>
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>


						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
							</div>
							<input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirmar constraseña" aria-describedby="basic-addon1"  name="password_confirmation" required autocomplete="new-password">
						</div>


						<div class="form-group row">
							<div class="col-md-12">
								<div class="custom-control custom-checkbox">
									@if (Route::has('password.request'))
									<a href="{{ route('password.request') }}" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i>¿Olvidaste la contraseña?</a>
									@endif

								</div>
							</div>
						</div>
						<div class="form-group text-center">
							<div class="col-xs-12 p-b-20">
								<button class="btn btn-block btn-lg btn-info" type="submit">Registrar</button>
							</div>
						</div>

						<div class="form-group m-b-0 m-t-10">
							@if (Route::has('login'))
							<div class="col-sm-12 text-center">
								¿Ya tienes cuenta?
								<a href="{{ route('login') }}" class="text-info m-l-5"><b>Ingresar!</b></a>
							</div>
							@endif
						</div>
					</form>


				</div>
			</div>
		</div>

	</div>
</div>

@endsection