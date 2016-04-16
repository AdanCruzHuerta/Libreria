<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mensaje;

class MensajesController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = Mensaje::create($request->all());
        return "ok funciono";
    }
}
