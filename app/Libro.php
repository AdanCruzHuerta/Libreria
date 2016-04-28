<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "Libro";
    protected $primary_key = "id_libro";
    protected $fillable = [
	    	'titulo',
			'edicion',
			'paginas',
			'precio',
			'isbn',
			'editorial_id_editorial',
			'Idioma_id_Idioma',
			'descuento',
			'Imagen'
    ];
    public $timestamps = false;
}
