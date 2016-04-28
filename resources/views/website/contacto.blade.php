@extends('templates.website')
@section('content')
	<section class="container">
		<div class="row contacto">
			<div class="col s12 l12">
				<h2>Contacto</h2>
			</div>
			@if(session()->has('created'))
				<!-- <div class="col s12 l6">
					<div class="card-panel green">
						<center>
							<p>Mensaje guardado</p>
						</center>
					</div>
				</div> -->
				<p style="color: green;">Mensaje guardado</p>
			@endif
			<ul>
				@foreach ($errors->all() as $error)
				 <li>{{ $error }}</li>   
				@endforeach
			</ul>
			<form action="/mensajes" method="POST">
				{{ csrf_field() }}
				<div class="col s12 l6">
					<div class="input-field">
						<i class="fa fa-user prefix"></i>
			          	<input type="text" class="validate" name="nombre">
			          	<label>Nombre</label>
			        </div>
			        <div class="input-field">
						<i class="fa fa-envelope-o prefix"></i>
			          	<input type="email" class="validate" name="email">
			          	<label>Email</label>
			        </div>
			        <div class="input-field">
			        	<i class="fa fa-pencil prefix"></i>
						<textarea class="materialize-textarea" cols="10" name="mensaje"></textarea>
			          	<label>Mensaje</label>
			        </div>
		        	<button type="submit" class="waves-effect waves-light btn-large cyan darken-3 right">Enviar</button>
				</div>
			</form>
			
			<div class="col s12 l1">
				&nbsp;
			</div>
			<div class="col s12 l5">
				<img src="/img/contacto.png" class="responsive-img">
			</div>
		</div>
	</section>
@stop