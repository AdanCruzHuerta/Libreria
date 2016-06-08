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
					<?php 
						$items = Cart::getContent(); $contador = 0; 
						$total = Cart::getTotal();
					?>
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
					<br>
					<div class="row">
						<div class="col s12 m4 l4 offset-m8 offset-l8">
							<table>
								<thead>
									<tr>
										<th>
											TOTAL A PAGAR:
										</th>
										<td>
											$ {{  (number_format($total, 2, '.', ',')) }}
										</td>
									</tr>
								</thead>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<a href="/pagar/{{$total}}" class="waves-effect waves-light btn right">Realizar pago</a>
						</div>
					</div>

				@endif
			</div>
		</div>
	</div>
@stop