<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Idioma;

class LibrosController extends Controller
{
    public function index()
    {
        return view('administrador.libros.index');
    }

    public function create()
    {
        return view('administrador.libros.create');
    }
    public function store(Request $request)
    {
        $file = $request->file('image'); 
        if ($request->hasFile('image')) {
            dd($file);
        }
        return back()->with('error-file', true);
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
    public function idiomas()
    {
        return Idioma::all();
    }
    public function storeIdioma(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3'
        ]);
        return Idioma::create($request->all());
    }
    public function deleteIdioma(Request $request)
    {   
        $delete = \DB::table('Idioma')
            ->where('id_Idioma', $request->id_Idioma)
            ->delete();
        if($delete){
            return $delete;
        }
    }   
}
