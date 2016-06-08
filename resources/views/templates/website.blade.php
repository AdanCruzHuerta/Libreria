<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bookstore</title>
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
</head>
<body>
	<header>
		<?php $route = Route::current()->uri(); ?>
		<nav class="cyan darken-3">
		    <div class="nav-wrapper">
		    	<a href="/" class="brand-logo">Bookstore <i class="fa fa-book"></i></a>
		    	<!--Boton de menu-->
		    	<a href="#" data-activates="mobile-demo" class="button-collapse">
		    		<i class="fa fa-bars"></i>
		    	</a>
		    	<!--resoluciones PC-->
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		      		<li class=@if($route == 'tienda') {{ 'active-item' }} @endif ><a href="/tienda">Tienda <i class="fa fa-shopping-bag"></i></a></li>
		      		<li class=@if($route == 'carrito') {{ 'active-item' }} @endif><a href="/carrito">{{Cart::getContent()->count()}} Carrito <i class="fa fa-shopping-cart"></i></a></li>
		        	<li class=@if($route == 'acerca') {{ 'active-item' }} @endif><a href="/acerca">Acerca <i class="fa fa-info-circle"></i></a></li>
		        	<li class=@if($route == 'contacto') {{ 'active-item' }} @endif><a href="/contacto">Contacto <i class="fa fa-phone-square"></i></a></li>
		        	<li class=@if($route == 'acceder') {{ 'active-item' }} @endif><a href="/acceder">Acceder <i class="fa fa-user"></i></a></li>
		      	</ul>
				<!--Resoluciones Tabletas y Telefonos-->
				<ul class="side-nav" id="mobile-demo">
			        <li><a href="/tienda">Tienda <i class="fa fa-shopping-bag"></i></a></li>
		      		<li><a href="/carrito">Carrito <i class="fa fa-shopping-cart"></i></a></li>
		        	<li><a href="/acerca">Acerca <i class="fa fa-info-circle"></i></a></li>
		        	<li><a href="/contacto">Contacto <i class="fa fa-phone-square"></i></a></li>
		        	<li><a href="/acceder">Acceder <i class="fa fa-user"></i></a></li>
			    </ul>
		    </div>
		</nav>
	</header>
	@yield('content')
	<footer class="page-footer cyan darken-3">
      	<div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">
                	Bookstore <i class="fa fa-book"></i>
                </h5>
                <p class="grey-text text-lighten-4">
                	Los precios publicados en esta tienda están sujetos a cambios sin previo aviso y solo son aplicables para ventas en línea. <br/>
                </p>
                <div class="payment">
                	<i class="fa fa-cc-visa"></i>
                	<i class="fa fa-cc-mastercard"></i>
                	<i class="fa fa-cc-amex"></i>
                	<i class="fa fa-cc-paypal"></i>
                </div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/tienda">Tienda</a></li>
                  <li><a class="grey-text text-lighten-3" href="/carrito">Carrito</a></li>
                  <li><a class="grey-text text-lighten-3" href="/acerca">Acerca</a></li>
                  <li><a class="grey-text text-lighten-3" href="/contacto">Contacto</a></li>
                  <li><a class="grey-text text-lighten-3" href="/acceder">Acceder</a></li>
                </ul>
              </div>
            </div>
      	</div>
      	<div class="footer-copyright">
            <div class="container">
	            © 2016 - Adán Cruz Huerta
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-instagram"></i></a>
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></a>
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square"></i></a>
            </div>
      	</div>
    </footer>
	<script src="/js/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.2/vue-resource.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
	@yield('scripts')
</body>
</html>