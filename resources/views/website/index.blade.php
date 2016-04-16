@extends('templates.website')
@section('content')
	<section id="slider-libreria" class="container">
			<div class="slider">
			    <ul class="slides">
			    	<li>
			        	<img src="/img/libreria1.jpg"> 
			      	</li>
			      	<li>
			        	<img src="/img/libreria2.jpg">
			      	</li>
			      	<li>
			      		<img src="/img/libreria3.jpeg">
			      	</li>
			      	<li>
			      		<img src="/img/libreria4.jpg">
			      	</li>
			    </ul>
			</div>
	</section>
	<section id="section2">
		<div class="container">
			<div class="row">
				<div class="col s12 l4">
					<center class="icon-section2">
						<i class="fa fa-check-square-o"></i>
					</center>
					<center>
						<span class="title-icon-section2">Calidad</span>	
					</center>
					<p class="p-section2">
					En Booksotore contamos con la más amplia gama de títulos de lecturas, ciencias, novelas, economia, salud, finanzas, infantiles y más.
					</p>
				</div>
				<div class="col s12 l4">
					<center class="icon-section2">
						<i class="fa fa-truck"></i>
					</center>
					<center>
						<span class="title-icon-section2">Envíos</span>	
					</center>
					<p class="p-section2">
						Contamos con envíos a toda la republica mexicana, con la entrega mas rapida del mercado. Adquiere un buen libro hasta la puerta de tu casa.
					</p>
				</div>
				<div class="col s12 l4">
					<center class="icon-section2">
						<i class="fa fa-credit-card"></i>
					</center>
					<center>
						<span class="title-icon-section2">Pago fácil</span>
					</center>
					<p class="p-section2">
						Bookstore pone a tu disposicion diferentes formas de pago, aceptamos tarjetas de credito, debito, paypal y pagos en Oxxos.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="nuevos" class="container">
		<div class="row">
			<div class="col s12">
				<h5>Nuevos libros</h5>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m6 l3">
				<center>
					<img src="/img/libro1.png" class="responsive-img book"/>
				</center>
			</div>
			<div class="col s12 m6 l3">
			<center>
				<img src="/img/libro2.png" class="responsive-img book"/>
			</center>
			</div>
			<div class="col s12 m6 l3">
				<center>
					<img src="/img/libro3.png" class="responsive-img book"/>	
				</center>
			</div>
			<div class="col s12 m6 l3">
				<center>
					<img src="/img/libro4.png" class="responsive-img book"/>
				</center>
			</div>
		</div>
	</section>
@stop