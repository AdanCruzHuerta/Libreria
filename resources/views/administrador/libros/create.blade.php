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
			@if(Session::has('success'))
			<h5>Exito</h5>
			@endif
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
							<input type="hidden" name="editorial_id_editorial" value="@{{id_editorial}}">
							<input type="hidden" name="Idioma_id_Idioma" value="@{{id_idioma}}">
							<input type="hidden" name="id_Autores" value="@{{id_Autores}}">
							<button type="submit" class="waves-effect waves-light btn right">Registrar</button>
						</div>
					</div>
		    	</div>
			</div>
		</form>
			<div class="col s12 l3">
				@include('administrador.libros.cards')
				<ul class="collapsible" data-collapsible="accordion">
					<li>
				      	<div class="collapsible-header active"><i class="fa fa-language" aria-hidden="true"></i>
				      		<b class="left">IDIOMAS</b>
				      	</div>
				      	<div class="collapsible-body">
				      		<p class="agregaIdioma">
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarIdioma">Agregar idioma</a>
						      	</center>
				      		</p>
				      		<p class="itemsIdioma" v-for="idioma in idiomas">
			      				<input class="with-gap" 
			      					   type="radio" 
			      					   id="idioma@{{$index}}"
			      					   value="@{{idioma.id_Idioma}}" 
			      					   v-model="id_idioma" />

					      		<label for="idioma@{{$index}}">@{{idioma.nombre}}</label>
					      		<button v-on:click="removeIdioma(idioma)" class="remover-idioma">&#10007;</button>
						    </p>
				      	</div>
				    </li>
				    <li>
				      	<div class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i><b>AUTORES</b></div>
				      	<div class="collapsible-body">
				      		<p class="agregaIdioma">
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarAutor">Agregar autor</a>
						      	</center>
				      		</p>
				      		<p class="itemsIdioma" v-for="autor in autores">
				      			<input type="checkbox" 
				      				   id="autor@{{$index}}" 
				      				   v-on:click="autorLibro(autor.idAutor, $index)"
				      				   />
					      		<label for="autor@{{$index}}">@{{autor.Nombre}}</label>
					      		<button v-on:click="removeAutor(autor)" class="remover-idioma">&#10007;</button>
				      		</p>
				      	</div>
				    </li>
				     <li>
				      	<div class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i><b>EDITORIALES</b></div>
				      	<div class="collapsible-body">
				      		<p class="agregaIdioma">
				      			<center>
						      		<a href="#!" class="agregaIdioma" v-on:click="agregarEditorial">Agregar editorial</a>
						      	</center>
				      		</p>
				      		<p class="itemsIdioma" v-for="editorial in editoriales">
			      				<input class="with-gap" 
			      					   type="radio" 
			      					   id="editorial@{{$index}}"
			      					   value="@{{editorial.id_editorial}}"
			      					   v-model="id_editorial" 
			      					   />
					      		<label for="editorial@{{$index}}">@{{editorial.nombre}}</label>
					      		<button v-on:click="removeEditorial(editorial)" class="remover-idioma">&#10007;</button>
						    </p>
				      	</div>
				    </li>
				</ul>
			</div>
	</div>
@stop
@section('scripts')
	<script src="/js/admin.js"></script>
@stop