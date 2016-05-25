<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editorial';
    protected $primary_key = 'id_editorial';
    protected $fillable = ['nombre','telefono'];
    public $timestamps = false;
}
