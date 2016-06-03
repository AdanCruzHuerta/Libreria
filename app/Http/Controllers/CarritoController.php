<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libro;

class CarritoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    public function store($id)
    {
        $libro = \DB::table('Libro')->where('id_libro', '=', $id)->first();
        \Cart::add($id, $libro->titulo, $libro->precio, 1, array());
        return back()->with('success', true);
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
        \Cart::remove($id);
        return back()->with('remove', true);
    }
}
