<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "Idioma";
    protected $primary_key = "id_Idioma";
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
