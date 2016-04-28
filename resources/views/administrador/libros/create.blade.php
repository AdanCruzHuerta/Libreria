@extends('templates.administrador')
@section('navegacion')
	<div class="row">
		<div id="navegacion" class="col s12">
			<a href="/administrador">Menú principal</a>
			<span class="space">|</span>
			<a href="/administrador/libros">Libros</a>
			<span class="space">|</span>
			<a class="nav-active">Registrar libro</a>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<h5><b>Registrar libro</b></h5> 
			<label>@{{titulo}}</label>
		</div>
	</div>
@stop

@section('content')
	<div class="row">
		<form action="/administrador/libros" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col s12 l9">
				<div class="card-panel">
					<div class="row">
						<div class="input-field col s12">
				        	<input id="titulo" type="text" class="validate" name="titulo" v-model="titulo">
				        	<label for="titulo">Titulo de libro</label>
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="input-field col s12 l6">
				        	<input id="edicion" type="text" class="validate" name="edicion">
				        	<label for="edicion">Edición</label>
	        			</div>
	        			<div class="input-field col s12 l6">
				        	<input id="paginas" type="number" class="validate" name="paginas">
				        	<label for="paginas">Paginas</label>
	        			</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
				        	<input id="precio" type="number" class="validate" name="precio">
				        	<label for="precio">Precio</label>
	        			</div>
	        			<div class="input-field col s12 l6">
				        	<input id="isbn" type="text" class="validate" name="isbn">
				        	<label for="isbn">ISBN</label>
	        			</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
				        	<input id="descuento" type="number" class="validate" name="descuento">
				        	<label for="descuento">Descuento</label>
	        			</div>
	        			<div class="file-field input-field col s12 l6">
							<div class="btn">
						        <span>Imagen</span>
						        <input type="file" name="image">
						    </div>
						    <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						    </div>
	        			</div>
					</div>
					<div class="row">
						<div class="col s12">
							<input type="hidden" name="editorial_id_editorial" value="1">
							<input type="hidden" name="Idioma_id_Idioma" value="1">
							<button type="submit" class="waves-effect waves-light btn right">Registrar</button>
						</div>
					</div>
		    	</div>
			</div>
			<div class="col s12 l3">
				<div class="card-panel">
					<center>
				        <h5>Idiomas</h5>
				        <label>Lista de idiomas</label>
				        <hr>
				        <h5>Editorial</h5>
				        <label>Lista de editoriales</label>
				        <hr>
				        <h5>Autores</h5>
				        <label>Lista de autores</label>
			        </center>
		    	</div>
			</div>
		</form>
	</div>
@stop

@section('scripts')
	<script>
		// JQUERY
		/*$(function(){
			// codigo
		});*/

		// VUE JS
		new Vue({
			// Atributos
			el: 'body', // ambiente de trabajo de Vue
			data: {
				titulo: ""
			},
			// Metodos
			ready: function() {
				alert("Hola mundo");
			}
		});
	</script>
@stop