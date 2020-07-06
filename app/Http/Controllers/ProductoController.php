<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categorias;
use App\Http\Requests\ValidacionProducto;
use App\Subcategorias;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=Producto::all();
        $categoria=Categorias::all();
        $subcategoria=Subcategorias::all();
        return view('/productos/productos', compact('producto'), compact('categoria', 'subcategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionProducto $request)
    {
        if($request->hasFile('img')){
            $img=$request->img;
            $nameimagen=$img->getClientOriginalName();
            $img->move(public_path()."/logos", $nameimagen);
        }
        $producto= new Producto();
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->comision=$request->comision;
        $producto->existencia=$request->existencia;
        $producto->descc=$request->descc;
        $producto->descp=$request->descp;
        $producto->cost_env=$request->cost_env;
        $producto->img=$nameimagen;
        $producto->idc=$request->idc;
        $producto->idsc=$request->idsc;
        $producto->save();
        return redirect("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idpr)
    {
        $producto=Producto::findOrFail($idpr);
        $categoria=Categorias::all();
        $subcategoria=Subcategorias::all();
        return view('/productos.edit', compact('producto'), compact('categoria', 'subcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionProducto $request, $idpr)
    {
         $producto=Producto::findOrFail($idpr);
        if(file_exists(public_path()."/logos/".$producto->img)){
            if($request->hasFile('img')){
                unlink(public_path()."/logos/".$producto->img);
                $img=$request->img;
                $nameimagen=$img->getClientOriginalName();
                $img->move(public_path()."/logos", $nameimagen);
            }
        }
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->comision=$request->comision;
        $producto->existencia=$request->existencia;
        $producto->descc=$request->descc;
        $producto->descp=$request->descp;
        $producto->cost_env=$request->cost_env;
        $producto->img=$nameimagen;
        $producto->idc=$request->idc;
        $producto->idsc=$request->idsc;
        $producto->save();
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpr)
    {

        $producto=Producto::FindOrFail($idpr);
        unlink(public_path()."/logos/".$producto->img);
        $producto->delete();
        return redirect("/productos");
    }
}
