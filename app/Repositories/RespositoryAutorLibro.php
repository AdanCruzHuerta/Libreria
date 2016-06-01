<?php 
namespace App\Repositories;

class RepositoryAutorLibro
{
	static function InsertAutoresLibros($autores, $libro)
	{
		// 1, 2
		foreach ($autores as $id_autor) {
			$autorlibro= \DB::table('Autor_has_Libro')->insert([
				'Autor_idAutor' => $id_autor, 
				'Libro_id_libro' => $libro->id
				]);
		}
		return true;
	}
}