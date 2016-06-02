@extends('templates.website')
@section('content')
	<div id="app" class="container">
		<div class="row">
			<div class="col s12">
				<h2>Lista de libros</h2>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<table>
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Imagen</th>
							<th>Idioma</th>
							<th>Detalles</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$contador = 1;
						?>
						@foreach($libros as $libro)
						<tr>
							<td>{{ $contador++ }}</td>
							<td>{{ $libro->titulo }}</td>
							<td>${{ $libro->precio }}.00</td>
							<td>
								<img src="{{ $libro->Imagen}}" width="100" />	
							</td>
							<td>{{$libro->idioma}}</td>
							<td>
								<a href="#!" 
								   v-on:click="mostrar({{$libro->id_libro}})">Ver detalles</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<center>
					{!! $libros->render() !!}{{--coloca la numeracion--}}
				</center>
			</div>
		</div>
	</div>
@stop
@section('scripts')
		<script>
			new Vue({
				el: '#app',
				data:{

				},
				methods: {
					mostrar: function(id_libro){
						this.$http.get('/detalle-libro', {id_libro:id_libro}).then(function(response){
							console.log(response)
						});
					}
				}
			})
		</script>
	@stop