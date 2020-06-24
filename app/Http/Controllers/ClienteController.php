<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('/clientes/clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente= new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->app=$request->app;
        $cliente->apm=$request->apm;
        $cliente->email=$request->email;
        $cliente->pass=$request->pass;
        $cliente->telefono=$request->telefono;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numext;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
        $cliente->save();
        return redirect("/clientes");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcl)
    {
        $cliente=Cliente::findOrFail($idcl);
        return view('/clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcl)
    {
        $cliente=Cliente::findOrFail($idcl);
        return view('/clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcl)
    {
        $cliente=Cliente::findOrFail($idcl);
        $cliente->nombre=$request->nombre;
        $cliente->app=$request->app;
        $cliente->apm=$request->apm;
        $cliente->email=$request->email;
        $cliente->pass=$request->pass;
        $cliente->telefono=$request->telefono;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numext;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
        $cliente->save();
        return redirect("/clientes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcl)
    {
        $cliente=Cliente::FindOrFail($idcl);
        $cliente->delete();
        return redirect("/clientes");
    }
}
