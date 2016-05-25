<?php 
namespace App\Repositories;

use App\Libro;

class RepositoryLibro
{
	static function store($request, $path)
	{
		$libro = new Libro;
		$libro->titulo = $request->titulo;
		$libro->edicion = $request->edicion;
		$libro->paginas = $request->paginas;
		$libro->precio = $request->precio;
		$libro->isbn = $request->isbn;
		$libro->editorial_id_editorial = $request->editorial_id_editorial;
		$libro->Idioma_id_Idioma = $request->Idioma_id_Idioma;
		$libro->Descuento = $request->descuento;
		$libro->Imagen = $path;
		if($libro->save()){
			return $libro; // toda la instancia 
		}
		return false;
	}
}