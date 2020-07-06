<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Subcategorias;
use App\Http\Requests\ValidacionSubcategoria;


class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria=Categorias::all();
        $subcategoria=Subcategorias::all();
        return view('/subcategorias/subcategorias', compact('categoria'), compact('subcategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionSubcategoria $request)
    {
        $subcategoria= new Subcategorias();
        $subcategoria->idc=$request->idc;
        $subcategoria->nombre=$request->nombre;
        $subcategoria->save();
        return redirect("/subcategorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsc)
    {
        $subcategoria=Subcategorias::findOrFail($idsc);
        return view('/subcategorias.show', compact('subcategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idsc)
    {
        $subcategoria=Subcategorias::findOrFail($idsc);
        $categoria=Categorias::all();
        return view('/subcategorias.edit', compact('subcategoria'), compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionSubcategoria $request, $idsc)
    {

        $subcategoria=Subcategorias::findOrFail($idsc);
        $subcategoria->nombre=$request->nombre;
        $subcategoria->idc=$request->idc;
        $subcategoria->save();
        return redirect("/subcategorias");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idsc)
    {
        $subcategoria=Subcategorias::FindOrFail($idsc);
        $subcategoria->delete();
        return redirect("/subcategorias");
    }
}
