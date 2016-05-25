<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = "Autor";
    protected $primary_key = "idAutor";
    protected $fillable = ['Nombre'];
    public $timestamps = false;
}
