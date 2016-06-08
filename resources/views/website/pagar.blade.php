@extends('templates.website')
@section('content')
	<script>
		// Conekta Public Key
		Conekta.setPublishableKey('key_Iu2j8Jc7HWZCDUjrHcr5ExQ'); //v3.2
		//Conekta.setPublicKey('key_Iu2j8Jc7HWZCDUjrHcr5ExQ'); //v5+
	</script>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2>Realizar el pago</h2>
			</div>
		</div>
		<form action="/pagar" method="POST" id="card-form">
			{{ csrf_field() }}
	  		<span class="card-errors"></span>
		  	<div class="form-row">
			    <label>
			      	<span>Nombre del tarjetahabiente</span>	
				    <input type="text" size="20" data-conekta="card[name]"/>
			    </label>
		  	</div>
		  	<div class="form-row">
		    	<label>
		      		<span>Número de tarjeta de crédito</span>
		      		<input type="text" size="20" data-conekta="card[number]"/>
		   	 	</label>
		  	</div>
		  	<div class="form-row">
		    	<label>
		      		<span>CVC</span>
		      		<input type="text" size="4" data-conekta="card[cvc]"/>
		    	</label>
		  	</div>
		  	<div class="form-row">
		    	<label>
		      		<span>Fecha de expiración (MM/AAAA)</span>
		      		<input type="text" size="2" data-conekta="card[exp_month]"/>
		    	</label>
		    	<span>/</span>
		    	<input type="text" size="4" data-conekta="card[exp_year]"/>
		  	</div>
		  		<input type="hidden" name="amount" value="{{$amount}}" />
		  	<button type="submit" class="right">¡Pagar ahora!</button> <br>
		  	<br>
		  	<br>
	 	</form>
	 </div>
	 <script>
		$(function () {
		var conektaSuccessResponseHandler, conektaErrorResponseHandler;
		$("#card-form").submit(function(event){
		    var $form = $("#card-form");
		    // Previene hacer submit más de una vez
		    $form.find("button").prop("disabled", true);
		     Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
		});
		conektaSuccessResponseHandler = function(token) {
            var $form;
            $form = $("#card-form");
            /* Inserta el token_id en la forma para que se envíe al servidor */
            $form.append($("<input type=\"hidden\" name=\"conektaTokenId\" />").val(token.id));
            /* and submit */
            $form.get(0).submit();
       };
       conektaErrorResponseHandler = function(token) {
        	var $form;
            $form = $("#card-form");
            //console.log(token.message_to_purchaser);
            var error = '<center><b>'+token.message_to_purchaser+'</b></center>';
			$form.find("button").prop("disabled", false);
        };
	});
	</script>
@stop