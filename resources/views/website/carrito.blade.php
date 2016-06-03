@extends('templates.website')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2>Carrito de compras</h2>
				@if(session()->has('remove'))
					<h4 style="color:red;">
						Elemento eliminado del carrito
					</h4>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				@if(Cart::isEmpty())
					<div class="row">
				      	<div class="col s12">
				        	<div class="card-panel">
					          <span>
					          	<center>
					          		No has agregado libros a tu carrito de compras. <br>
									<a href="/tienda">Ir a tienda</a>
					          	</center>
					          </span>
				        	</div>
      					</div>
    				</div>
				@else
					<?php $items = Cart::getContent(); $contador = 0; ?>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th>Subtotal</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($items as $item)
							<tr>
								<td>{{ ++$contador }}</td>
								<td>{{ $item->name }}</td>
								<td>${{ (number_format($item->price, 2, '.', ',')) }}</td>
								<td>{{ $item->quantity }}</td>
								<td>${{ (number_format($item->getPriceSum(), 2, '.', ',')) }}</td>
								<td>
									<a href="/remover-item/{{$item->id}}" style="color:red;">X</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				@endif
			</div>
		</div>
	</div>
@stop