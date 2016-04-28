<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mensaje;
use App\Http\Requests\MensajesRequest;

class MensajesController extends Controller
{
    public function store(MensajesRequest $request)
    {
        $mensaje = Mensaje::create($request->all());
       if($mensaje) {
       		return "Mensaje creado";
       }
    }
}
