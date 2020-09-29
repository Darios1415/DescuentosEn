<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorias;
use App\Http\Requests\ValidacionCategoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    tabla categorias
	=============================================*/
    public function index()
    {
        $admin=session()->get('usuario');
        $categoria=Categorias::all();
        return view('/tablas/categorias')
        ->with('admin', $admin)
        ->with('categoria', $categoria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	        formulario de categoria
	=============================================*/
    public function create()
    {
        $categoria=Categorias::all();
        $admin=session()->get('usuario');
        return view('/catalogos/categorias')
        ->with('admin', $admin)
        ->with('categoria', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    Creacion de la categoria
	=============================================*/
    public function store(ValidacionCategoria $request)
    {
        if($request->hasFile('ruta')){
        $ruta=$request->ruta;
        $nameruta=uniqid().$ruta->getClientOriginalName();
        $ruta->move(public_path()."/logos/categoria", $nameruta);
    }
        $categoria= new Categorias();
        $categoria->nombre=$request->nombre;
        $categoria->ruta=$nameruta;
        $categoria->save();
        return redirect("/categorias")->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*=============================================
        Formulario de la edicion de categoria
	=============================================*/
    public function edit($idc)
    {
        $admin=session()->get('usuario');
        $categoria=Categorias::findOrFail($idc);
        return view('/catalogos/editcategorias')
        ->with('admin', $admin)
        ->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*=============================================
        Actualizacion de la categoria
	=============================================*/
    public function update(Request $request, $idc)
    {
        $categoria=Categorias::findOrFail($idc);
        if(file_exists(public_path()."/logos/categoria/".$categoria->ruta)){
            if($request->hasFile('ruta')){
                unlink(public_path()."/logos/categoria/".$categoria->ruta);
                $ruta=$request->ruta;
                $nameruta=uniqid().$ruta->getClientOriginalName();
                $ruta->move(public_path()."/logos/categoria/", $nameruta);
                $categoria->ruta=$nameruta;
            }else{
                if($request->hasFile('ruta')){
                    $ruta=$request->ruta;
                    $nameruta=uniqid().$ruta->getClientOriginalName();
                    $ruta->move(public_path()."/logos/categoria/", $nameruta);
                    $categoria->ruta=$nameruta;
                }
            }
        }else{
            if($request->hasFile('ruta')){
                $ruta=$request->ruta;
                $nameruta=uniqid().$ruta->getClientOriginalName();
                $ruta->move(public_path()."/logos/categoria/", $nameruta);
                $categoria->ruta=$nameruta;
            }

        }
        $categoria->nombre=$request->nombre;
        $categoria->save();
        return redirect("/categorias")->with('success', 'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    Eliminacion de la categoria
	=============================================*/
    public function destroy($idc)
    {
        $categoria=Categorias::FindOrFail($idc);
        if(file_exists(public_path()."/logos/categoria/".$categoria->ruta)){
        unlink(public_path()."/logos/categoria/".$categoria->ruta);
        }
        $categoria->delete();
        return redirect("/categorias")->with('success', 'delete');
    }
}
