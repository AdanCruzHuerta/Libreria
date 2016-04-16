<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            // usuario administrador
            if(Auth::user()->tipo == 1) { 
                return redirect('/administrador');
            }
            // usuario cliente
            return redirect('/');
        }
        // muestra el formulario de login
        return view('website.acceder');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // creo una variable de sesion del usuario
            $usuario = Auth::user();
            // verifica que sea administrador
            if (Auth::user()->tipo == 1 ) {
                //$request->session()->put('administrador', $usuario);
                return redirect('/administrador');
            } 
            return "Cliente";
        }
        return back();
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}