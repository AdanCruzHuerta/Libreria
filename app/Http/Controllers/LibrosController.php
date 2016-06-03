<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\{Idioma, Autor, Editorial, Libro};
use App\Helpers\Filesystem;
use App\Repositories\{RepositoryLibro, RepositoryAutorLibro};

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
        // validar Idioma, Autores, Editorial
        // String "1,2,3"
        $id_autor = explode(',', $request->id_Autores); // Array [1,2,3] 
        // verificar que exista el archivo
        $file = $request->file('image'); 
        if ($request->hasFile('image')) {
            // si existe el archivo lo vamos a almacenar
            $filesystem = Filesystem::upload($file);
            if(!$filesystem){
                return back()->with('error-file', true);
            } 
            // una vez almacenado lo insertamos en DB
            $insert = RepositoryLibro::store($request, $filesystem);
            if(is_object($insert)){
                $autores_libros = RepositoryAutorLibro::InsertAutoresLibros($id_autor, $insert);
                if($autores_libros){
                    return back()->with('success', true);    
                }
                return back()->with('error', true);
            }
            return back()->with('error', true);
        }
        // si no existe el archivo lo ignoramos
        return back()->with('error-file', true);
    }
    public function show()
    {
        $libros = RepositoryLibro::all();
        return view('website.tienda', compact('libros'));
    }
    public function detalle(Request $request)
    {
        $libro = RepositoryLibro::detalle($request);
        $autores = RepositoryLibro::getAutores($request);
        return compact('libro','autores');
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
    public function deleteAutor(Request $request)
    {
        $delete = \DB::table('Autor')
            ->where('idAutor', $request->idAutor)
            ->delete();
        if($delete){
            return $delete;
        }
    }
    public function autores()
    {
        return Autor::all();
    }
    public function storeAutor(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required|min:3'
        ]);
        return Autor::create($request->all());
    }
    public function editoriales()
    {
        return Editorial::all();
    }
    public function storeEditorial(Request $request)
    {
            $this->validate($request, [
                'nombre' => 'required|min:3'
            ]);
            return Editorial::create($request->all());
    }
    public function deleteEditorial(Request $request)
    {
        $delete = \DB::table('editorial')
            ->where('id_editorial', $request->id_editorial)
            ->delete();
        if($delete){
            return $delete;
        }
    }
}
