<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $admin=session()->get('usuario');
        $categoria=Categorias::all();
        $subcategoria=Subcategorias::all();
        return view('/tablas/subcategorias')
        ->with('admin', $admin)
        ->with('subcategoria', $subcategoria)
        ->with('categoria', $categoria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categorias::all();
        $subcategoria=Subcategorias::all();
        $admin=session()->get('usuario');
        return view('/catalogos/subcategorias')
        ->with('admin', $admin)
        ->with('subcategoria', $subcategoria)
        ->with('categoria', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionSubcategoria $request)
    {
        if($request->hasFile('ruta')){
            $ruta=$request->ruta;
            $nameruta=uniqid().$ruta->getClientOriginalName();
            $ruta->move(public_path()."/logos/subcategoria", $nameruta);
        }
        $subcategoria= new Subcategorias();
        $subcategoria->idc=$request->idc;
        $subcategoria->nombre=$request->nombre;
        $subcategoria->ruta=$nameruta;
        $subcategoria->save();
        return redirect("/subcategorias")->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idsc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idsc)
    {
        $admin=session()->get('usuario');
        $subcategoria=Subcategorias::findOrFail($idsc);
        $categoria=Categorias::all();
        return view('/catalogos/editsubcategorias')
        ->with('admin', $admin)
        ->with('subcategoria', $subcategoria)
        ->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idsc)
    {
        $subcategoria=Subcategorias::findOrFail($idsc);
        if(file_exists(public_path()."/logos/subcategoria/".$subcategoria->ruta)){
            if($request->hasFile('ruta')){
                unlink(public_path()."/logos/subcategoria/".$subcategoria->ruta);
                $ruta=$request->ruta;
                $nameruta=uniqid().$ruta->getClientOriginalName();
                $ruta->move(public_path()."/logos/subcategoria/", $nameruta);
                $subcategoria->ruta=$nameruta;
            }else{
                if($request->hasFile('ruta')){
                    $ruta=$request->ruta;
                    $nameruta=uniqid().$ruta->getClientOriginalName();
                    $ruta->move(public_path()."/logos/subcategoria/", $nameruta);
                    $subcategoria->ruta=$nameruta;
                }
            }
        }else{
            if($request->hasFile('ruta')){
                $ruta=$request->ruta;
                $nameruta=uniqid().$ruta->getClientOriginalName();
                $ruta->move(public_path()."/logos/subcategoria/", $nameruta);
                $subcategoria->ruta=$nameruta;
            }
        }
        $subcategoria->nombre=$request->nombre;
        $subcategoria->idc=$request->idc;
        $subcategoria->save();
        return redirect("/subcategorias")->with('success', 'edit');
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
        if(file_exists(public_path()."/logos/subcategoria/".$subcategoria->ruta)){
            unlink(public_path()."/logos/subcategoria/".$subcategoria->ruta);
            }
        $subcategoria->delete();
        return redirect("/subcategorias")->with('success', 'delete');
    }
}
