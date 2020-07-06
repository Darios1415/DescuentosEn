<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Http\Requests\ValidacionProveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor=Proveedor::all();
        return view('/proveedores/proveedores', compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionProveedor $request)
    {
        if($request->hasFile('logo')){
            $logo=$request->logo;
            $namelogo=$logo->getClientOriginalName();
            $logo->move(public_path()."/logos", $namelogo);
        }
        $proveedor= new Proveedor();
        $proveedor->marca=$request->marca;
        $proveedor->nombre=$request->nombre;
        $proveedor->app=$request->app;
        $proveedor->apm=$request->apm;
        $proveedor->telefono=$request->telefono;
        $proveedor->clabe=$request->clabe;
        $proveedor->colonia=$request->colonia;
        $proveedor->numint=$request->numext;
        $proveedor->numext=$request->numext;
        $proveedor->cp=$request->cp;
        $proveedor->logo=$namelogo;
        $proveedor->email=$request->email;
        $proveedor->pass=$request->pass;
        $proveedor->save();
        return redirect("/proveedores");
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
        $proveedor=Proveedor::all();
        return view('/proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionProveedor $request, $idpr)
    {
        $proveedor=Proveedor::findOrFail($idpr);
        if(file_exists(public_path()."/logos/".$proveedor->logo)){
            if($request->hasFile('logo')){
                unlink(public_path()."/logos/".$proveedor->logo);
                $logo=$request->logo;
                $namelogo=$logo->getClientOriginalName();
                $logo->move(public_path()."/logos", $namelogo);
            }
        }
        $proveedor->marca=$request->marca;
        $proveedor->nombre=$request->nombre;
        $proveedor->app=$request->app;
        $proveedor->apm=$request->apm;
        $proveedor->telefono=$request->telefono;
        $proveedor->clabe=$request->clabe;
        $proveedor->colonia=$request->colonia;
        $proveedor->numint=$request->numext;
        $proveedor->numext=$request->numext;
        $proveedor->cp=$request->cp;
        $proveedor->logo=$namelogo;
        $proveedor->email=$request->email;
        $proveedor->pass=$request->pass;
        $proveedor->save();
        return redirect("/proveedores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpr)
    {
        $proveedor=Proveedor::FindOrFail($idpr);
        unlink(public_path()."/logos/".$proveedor->logo);
        $proveedor->delete();
        return redirect("/proveedores");
    }
}
