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

	static function all()
	{
		return \DB::table('Libro')
            ->join('Idioma', 'Libro.Idioma_id_Idioma', '=','Idioma.id_Idioma')
            ->select('Libro.id_libro','Libro.titulo','Libro.precio', 'Libro.Imagen', 'Idioma.nombre as idioma')
            ->paginate(10);
	}
	static function detalle($request)
	{
		// get -> coleccion de datos muchos datos
		// first
		$libro = \DB::table('Libro')
			->join('editorial', 'Libro.editorial_id_editorial', '=', 'editorial.id_editorial')
			->join('Idioma', 'Libro.Idioma_id_Idioma', '=', 'Idioma.id_idioma')
			->where('Libro.id_libro', '=', $request->id_libro)
			->select('Libro.titulo', 'Libro.edicion', 'Libro.paginas', 'Libro.precio', 'Libro.isbn', 'editorial.nombre as editorial', 'Idioma.nombre as idioma')
			->first();
		dd($libro);
		return $libro;
	}
}