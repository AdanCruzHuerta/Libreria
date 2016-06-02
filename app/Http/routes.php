<?php

get('/', function () {
    return view('website.index');
});
get('/tienda', 'LibrosController@show');
get('/carrito', function(){
	return view('website.carrito');
});
get('/acerca', function(){
	return view('website.acerca');
});
get('/contacto', function(){
	return view('website.contacto');
});
get('/acceder', 'LoginController@index');
post('/mensajes', 'MensajesController@store');
post('/login', 'LoginController@store');
get('/administrador/panel', 'AdministradorController@index');

get('/detalle-libro', 'LibrosController@detalle');

// rutas del administrador
Route::group(['middleware' => 'admin'], function () {
	get('/administrador', 'AdministradorController@index');
	get('/logout', 'LoginController@destroy');
	Route::resource('/administrador/libros', 'LibrosController');
		get('/administrador/libros/create/idiomas', 'LibrosController@idiomas');
		post('/administrador/libros/create/storeIdioma', 'LibrosController@storeIdioma');
		post('/administrador/libros/create/deleteIdioma', 'LibrosController@deleteIdioma');
		get('/administrador/libros/create/autores', 'LibrosController@autores');
		post('/administrador/libros/create/storeAutor', 'LibrosController@storeAutor');
		post('/administrador/libros/create/deleteAutor', 'LibrosController@deleteAutor');
		get('/administrador/libros/create/editoriales', 'LibrosController@editoriales');
		post('/administrador/libros/create/storeEditorial', 'LibrosController@storeEditorial');
		post('/administrador/libros/create/deleteEditorial', 'LibrosController@deleteEditorial');
});

// Consultas multiples
//Libro
// Autor
// Libro_Autor
get('/consulta', function(){
	try{
		\DB::beginTransaction();
	// Eloquent
		$libro = new App\Libro;
			$libro->titulo = 'El alquimista';
			$libro->edicion = 'Segunda';
			$libro->paginas = 350;
			$libro->precio = 180.5;
			$libro->isbn = 'ABCDS';
			$libro->editorial_id_editorial = 1;
			$libro->Idioma_id_Idioma = 1;
			$libro->descuento = "";
			$libro->Imagen = 'imagen.jpg';
			$libro->save();

		$autor = new App\Autor;
			$autor->Nombre = "Paulo Cohello";
			$autor->save();

		if(is_object($libro) && is_object($autor)) {
			$detalle = \DB::table('Autor_has_Libro')->insert([
				"Autor_idAutor" => $autor->id,
				"Libro_id_libro" => 15
			]);
		}
		\DB::commit();
		return "Exito";
	}  catch(Exception $ex) {
			\DB::rollback();
			return "Fail";
	}
});