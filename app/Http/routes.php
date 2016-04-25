<?php

get('/', function () {
    return view('website.index');
});
get('/tienda', function(){
	return view('website.tienda');
});
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

// rutas del administrador
Route::group(['middleware' => 'admin'], function () {
	get('/administrador', 'AdministradorController@index');
	get('/logout', 'LoginController@destroy');
	Route::resource('/administrador/libros', 'LibrosController');
});