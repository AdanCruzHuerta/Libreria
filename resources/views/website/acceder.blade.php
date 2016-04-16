@extends('templates.website')

@section('content')
	<section class="container">
		<div class="row">
			<div class="col s12 l6 offset-l3">
				<div class="card-panel form-acceso">

					@if(Session::has('error'))
						<p class="error">Usuario no encontrado</p>
					@endif
					<form class="col s12" action="/login" method="POST">
						{{ csrf_field() }}
						<div class="row">
							<div class="input-field col s12">
								<input id="email" name="email" type="email" class="validate" required />
          						<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="password" name="password" type="password" class="validate" required>
          						<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<button type="submit" class="waves-effect waves-light btn right cyan darken-3">Acceder <i class="fa fa-sign-in" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

@stop