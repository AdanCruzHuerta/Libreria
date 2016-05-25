<?php 
namespace App\Helpers;

class Filesystem
{
	static function upload($file)
	{
		$path = '/img/libros';
		$name = $file->getClientOriginalName();
		if($file->move(public_path().$path, $name)){
			return $path .= '/'.$name;
		}
		return $path = false;
	}
}