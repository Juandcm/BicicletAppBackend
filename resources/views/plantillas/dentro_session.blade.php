<!doctype html>
<html>
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Chuao</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/bootstrap/css/bootstrap.min.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/font-awesome/css/font-awesome.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/magnific-popup/magnific-popup.css' )}}" />
	<link rel="stylesheet" href="{{ asset( 'css/bootstrap-datepicker/css/datepicker3.css' )}}" />
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/theme.css') }}" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/select2/select2.css') }}" />
	<link rel="stylesheet" href="{{ asset( 'js/DataTables/datatables.min.css') }}" />
	<link rel="stylesheet" href="{{ asset( 'js/dropify/dist/css/dropify.min.css' )}}" />

	<link rel="stylesheet" href="{{ asset( 'js/sweetalert2/sweetalert2.min.css' )}}" />
	

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/default.css ') }}" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset( 'css/theme-custom.css ') }}">

	<!-- Head Libs -->
	<script src="{{ asset( 'js/modernizr/modernizr.js' ) }}"></script>

</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="#" class="logo">
					<img src="{{ asset('img/logo.png') }}" height="35" alt="Porto Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
			
			<!-- start: search & user box -->
			<div class="header-right">
				<form  method="POST" action="{{ route('buscador') }}" class="search nav-form">
					@csrf
					<div class="input-group input-search">
						<input type="text" class="form-control" name="buscadorinput" id="buscadorinput" placeholder="Buscar...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				
				<span class="separator"></span>
				
				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-tasks"></i>
							<span class="badge">3</span>
						</a>
						
						<div class="dropdown-menu notification-menu large">
							<div class="notification-title">
								<span class="pull-right label label-default">3</span>
								Tasks
							</div>
							
							<div class="content">
								<ul>
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Generating Sales Report</span>
											<span class="message pull-right text-dark">60%</span>
										</p>
										<div class="progress progress-xs light">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
										</div>
									</li>
									
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Importing Contacts</span>
											<span class="message pull-right text-dark">98%</span>
										</p>
										<div class="progress progress-xs light">
											<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
										</div>
									</li>
									
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Uploading something big</span>
											<span class="message pull-right text-dark">33%</span>
										</p>
										<div class="progress progress-xs light mb-xs">
											<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="badge">4</span>
						</a>
						
						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default">230</span>
								Messages
							</div>
							
							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="{{ asset('img/!sample-user.jpg') }}" alt="Joseph Doe Junior" class="img-circle" />
											</figure>
											<span class="title">Joseph Doe</span>
											<span class="message">Lorem ipsum dolor sit.</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="{{ asset('img/!sample-user.jpg') }}" alt="Joseph Junior" class="img-circle" />
											</figure>
											<span class="title">Joseph Junior</span>
											<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit.</span>
										</a>
									</li>
								</ul>

								<hr />
								
								<div class="text-right">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-bell"></i>
							<span class="badge">3</span>
						</a>
						
						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default">3</span>
								Alerts
							</div>
							
							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-thumbs-down bg-danger"></i>
											</div>
											<span class="title">Server is Down!</span>
											<span class="message">Just now</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-lock bg-warning"></i>
											</div>
											<span class="title">User Locked</span>
											<span class="message">15 minutes ago</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-signal bg-success"></i>
											</div>
											<span class="title">Connection Restaured</span>
											<span class="message">10/10/2014</span>
										</a>
									</li>
								</ul>
								
								<hr />
								
								<div class="text-right">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
				<span class="separator"></span>
				
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="{{ asset( 'storage/img/' ) }}/{{ Auth::user()->photo }}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{ asset('img/!logged-user.jpg') }}" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">{{ Auth::user()->name }}</span>
							<span class="role">administrator</span>
						</div>
						
						<i class="fa custom-caret"></i>
					</a>
					
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a href="#" data-toggle="modal" data-target="#editarModal">
									<i class="fa fa-user"></i> Editar Perfil
 @routeIs('dashboard') 
	prueba eslash
 @endif

{!!Request::path()!!}
								</a>
							</li>
							<li>

								<a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fa fa-power-off"></i> Salir
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>



							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
				
				<div class="sidebar-header">
					<div class="sidebar-title">
						Navegación
					</div>
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="Navegación">
							<ul class="nav nav-main">
								<li>
									<a href="{{route('home')}}">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Sistema Chuao</span>
									</a>
								</li>
								<li>
									<a href="mailbox-folder.html">
										<span class="pull-right label label-primary">182</span>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<span>Mensajes</span>
									</a>
								</li>

								@can('admin')
								<li class="nav-parent">
									<a>
										<i class="fa fa-align-left" aria-hidden="true"></i>
										<span>Administrar</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('adminusuarios') }}">Administrar Usuarios</a>
										</li>
									</ul>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('roles') }}">Roles</a>
										</li>
									</ul>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('permisos') }}">Permisos</a>
										</li>
									</ul>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('categorias') }}">Categorias</a>
										</li>
									</ul>
									<ul class="nav nav-children">
										<li>
											<a href="{{ route('contraseñas') }}">Contraseñas</a>
										</li>
									</ul>

								</li>
								@endcan

								@can('crea')
								<li class="nav-parent">
									<a>
										<i class="fa fa-align-left" aria-hidden="true"></i>
										<span>CREA</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a>Administración</a>
										</li>
										<li>
											<a>Inventario</a>
										</li>
										<li>
											<a>Solicitud de aula</a>
										</li>
										<li>
											<a>Evaluación de aula</a>
										</li>
										<li>
											<a>Inscripciones</a>
										</li>
										<li>
											<a>Certificación y autoria</a>
										</li>
										<li>
											<a>Estadísticas de uso</a>
										</li>
										<li>
											<a>Producción</a>
										</li>
									</ul>
								</li>
								@endcan


								@can('crt')
								<li class="nav-parent">
									<a>
										<i class="fa fa-list-alt" aria-hidden="true"></i>
										<span>CRT</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="forms-basic.html">
												Basic
											</a>
										</li>
									</ul>
								</li>
								@endcan

								@can('civ')
								<li class="nav-parent">
									<a>
										<i class="fa fa-table" aria-hidden="true"></i>
										<span>CIV</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="tables-basic.html">
												Basic
											</a>
										</li>
									</ul>
								</li>
								@endcan

								@can('cga')
								<li class="nav-parent">
									<a>
										<i class="fa fa-table" aria-hidden="true"></i>
										<span>CGA</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="tables-basic.html">
												Basic
											</a>
										</li>
									</ul>
								</li>
								@endcan
							</ul>
						</nav>
						
						<hr class="separator" />
						
						<div class="sidebar-widget widget-tasks">
							<div class="widget-header">
								<h6>Projects</h6>
								<div class="widget-toggle">+</div>
							</div>
							<div class="widget-content">
								<ul class="list-unstyled m-none">
									<li><a href="#">Porto HTML5 Template</a></li>
									<li><a href="#">Tucson Template</a></li>
								</ul>
							</div>
						</div>
						
						<hr class="separator" />
						
						<div class="sidebar-widget widget-stats">
							<div class="widget-header">
								<h6>Company Stats</h6>
								<div class="widget-toggle">+</div>
							</div>
							<div class="widget-content">
								<ul>
									<li>
										<span class="stats-title">Stat 1</span>
										<span class="stats-complete">85%</span>
										<div class="progress">
											<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
												<span class="sr-only">85% Complete</span>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					
				</div>
				
			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Páginas del sistema</h2>
					
					
					<div class="right-wrapper pull-right">					
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!-- start: page -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							@include('plantillas.editarusuario')
							@yield('contenidoprincipal')
						</div>
					</div>
				</div>
				<!-- end: page -->
			</section>
		</div>

		<aside id="sidebar-right" class="sidebar-right">
			<div class="nano">
				<div class="nano-content">
					<a href="#" class="mobile-close visible-xs">
						Collapse <i class="fa fa-chevron-right"></i>
					</a>
					
					<div class="sidebar-right-wrapper">
						
						<div class="sidebar-widget widget-calendar">
							<h6>Upcoming Tasks</h6>
							<div data-plugin-datepicker data-plugin-skin="dark" ></div>
							
							<ul>
								<li>
									<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
									<span>Company Meeting</span>
								</li>
							</ul>
						</div>
						
						<div class="sidebar-widget widget-friends">
							<h6>Friends</h6>
							<ul>
								<li class="status-online">
									<figure class="profile-picture">
										<img src="{{ asset('img/!sample-user.jpg') }}" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-offline">
									<figure class="profile-picture">
										<img src="{{ asset('img/!sample-user.jpg') }}" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</aside>
	</section>

	<!-- Vendor -->

	
	<script src="{{ asset( 'js/jquery/jquery.min.js' ) }}"></script>
	<script src="{{ asset( 'js/jquery-browser-mobile/jquery.browser.mobile.js' ) }} "></script>
	<script src="{{ asset( 'css/bootstrap/js/bootstrap.min.js' ) }}"></script>
	<script src="{{ asset( 'js/nanoscroller/nanoscroller.js' ) }}"></script>
	<script src="{{ asset( 'css/bootstrap-datepicker/js/bootstrap-datepicker.js' ) }}"></script>
	<script src="{{ asset( 'css/magnific-popup/magnific-popup.js' ) }}"></script>
	<script src="{{ asset( 'js/jquery-placeholder/jquery.placeholder.js' ) }}"></script>
	<script src="{{ asset( 'js/DataTables/datatables.min.js' ) }}"></script>


	<script src="{{ asset( 'js/Highcharts-7.1.3/code/highcharts.js' ) }}"></script>
	<script src="{{ asset( 'js/Highcharts-7.1.3/code/modules/drilldown.js' ) }}"></script>
	<script src="{{ asset( 'js/Highcharts-7.1.3/code/highcharts-3d.js' ) }} "></script>
	<script src="{{ asset( 'js/Highcharts-7.1.3/code/modules/exporting.js' ) }}"></script>
	<script src="{{ asset( 'js/Highcharts-7.1.3/code/modules/offline-exporting.js' ) }} "></script>
	<script src="{{ asset( 'js/Highcharts-7.1.3/code/modules/export-data.js' ) }} "></script>

	<script src="{{ asset( 'js/dropify/dist/js/dropify.min.js' ) }}"></script>

	<script src="{{ asset( 'js/sweetalert2/sweetalert2.min.js' ) }}"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="{{ asset( 'js/theme.js' ) }}"></script>
	
	<!-- Theme Custom -->
	<script src="{{ asset( 'js/theme.custom.js' ) }}"></script>
	
	<!-- Theme Initialization Files -->
	<script src="{{ asset( 'js/theme.init.js' ) }}"></script>

	<!-- Script Principal -->
	<script src="{{ asset( 'js/interaccionjuan.js' ) }}"></script>
	<script src="{{ asset( 'js/interaccionfranklin.js' ) }}"></script>
	<script src="{{ asset( 'js/interaccionmiguel.js' ) }}"></script>

	

</body>
</html>