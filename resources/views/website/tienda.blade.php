@extends('templates.website')
@section('content')
	<div class="container">
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
								<a href="#!">Ver detalles</a>
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