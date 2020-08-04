<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Http\Requests\ValidacionCategoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Categorias::all();
        return view('/tablas/categorias', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categorias::all();
        return view('/catalogos/categorias', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCategoria $request)
    {
        $categoria= new Categorias();
        $categoria->nombre=$request->nombre;
        $categoria->save();
        return redirect("/categorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idc)
    {
        $categoria=Categorias::findOrFail($idc);
        return view('/categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idc)
    {
        $categoria=Categorias::findOrFail($idc);
        return view('/catalogos/editcategorias',  compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCategoria $request, $idc)
    {
        $categoria=Categorias::findOrFail($idc);
        $categoria->nombre=$request->nombre;
        $categoria->save();
        return redirect("/categorias");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idc)
    {
        $categoria=Categorias::FindOrFail($idc);
        $categoria->delete();
        return redirect("/categorias");
    }
}
