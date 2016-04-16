@extends('templates.administrador')

@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador" class="breadcrumb left">Menú principal</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Menú principal</b></h5>
		</div>
	</div>
@stop
@section('content')
<div class="row">
	<div class="col s12 m6 l6">
		<a href="/administrador/libros" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3 class="color-item"><b><i class="fa fa-book"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong class="color-item">Libros</strong>
						</h5>
						<h6 class="color-subitem">Módulo libros</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/ventas" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-usd" aria-hidden="true"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Ventas</strong>
						</h5>
						<h6>Modulo de ventas</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/usuarios" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-users"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Usuarios</strong>
						</h5>
						<h6>Módulo de usuarios</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/administrador/configuracion" class="item">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-cog"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Configuración</strong>
						</h5>
						<h6>Configuración de la cuenta</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col s12 m6 l6">
		<a href="/" class="item" target="_blank">
			<div class="card-panel grey lighten-4">
				<div class="row">
					<div class="col s2">
						<h3><b><i class="fa fa-desktop"></i></b></h3>
					</div>
					<div class="col s10">
						<h5>
							<strong>Sitio web</strong>
						</h5>
						<h6>Ver sitio web del ayuntamiento</h6>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<center>
			<p>Derechos reservados - 2016</p>
		</center>
	</div>
</div>
@stop