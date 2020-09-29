<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Cliente;
use App\Municipio;
use App\Usuario;
use App\Http\Requests\ValidacionCliente;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    Tabla Cliente
	=============================================*/
    public function index()
    {
        $admin=session()->get('usuario');
        $cliente=Cliente::all();
        $usuario=Usuario::all();
        $municipio=Municipio::all();
        return view('/tablas/clientes')
        ->with('admin', $admin)
        ->with('cliente', $cliente)
        ->with('usuario', $usuario)
        ->with('municipio', $municipio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    formulario cliente
	=============================================*/
    public function create()
    {
        $admin=session()->get('usuario');
        $cliente=Cliente::all();
        $usuario=Usuario::all();
        $municipio=Municipio::all();
        return view('/catalogos/clientes')
        ->with('admin', $admin)
        ->with('cliente', $cliente)
        ->with('usuario', $usuario)
        ->with('municipio', $municipio);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*=============================================
        creacion de cliente
	=============================================*/
    public function store(ValidacionCliente $request)
    {
        if($request->hasFile('img')){
            $img=$request->img;
            $nameimagen=uniqid().$img->getClientOriginalName();
            $img->move(public_path()."/logos/cliente/", $nameimagen);
        }
        $usuario= new Usuario();
        $usuario->nombre=$request->nombre;
        $usuario->app=$request->app;
        $usuario->apm=$request->apm;
        $usuario->email=$request->email;
        $usuario->pass=md5($request->pass);
        $usuario->telefono=$request->telefono;
        $usuario->idtu=3;
        $usuario->save();
        $idu=Usuario::where('email', '=', $request->email)->get();
        $idu=$idu[0]->idu;
        $cliente= new Cliente();
        $cliente->idm=$request->idm;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numint;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
        $cliente->img=$nameimagen;
        $cliente->idu=$idu;
        $cliente->save();
        return redirect("/clientes")->with('success', 'ok');
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

    /*=============================================
	    Formulario edicion de cliente
	=============================================*/
    public function edit($idcl)
    {
        $admin=session()->get('usuario');
        $cliente=Cliente::findOrFail($idcl);
        $usuario=Usuario::findOrFail($cliente->idu);
        $municipio=Municipio::all();
        return view('/catalogos/editclientes')
        ->with('admin', $admin)
        ->with('cliente', $cliente)
        ->with('usuario', $usuario)
        ->with('municipio', $municipio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*=============================================
        Actualizacion del cliente
	=============================================*/
    public function update(Request $request, $idcl)
    {
        $cliente=Cliente::findOrFail($idcl);
        $usuario=Usuario::findOrFail($cliente->idu);
        if(file_exists(public_path()."/logos/cliente/".$cliente->img)){
            if($request->hasFile('img')){
                unlink(public_path()."/logos/cliente/".$cliente->img);
                $img=$request->img;
                $nameimagen=uniqid().$img->getClientOriginalName();
                $img->move(public_path()."/logos/cliente/", $nameimagen);
                $cliente->img=$nameimagen;
            }else{
                if($request->hasFile('img')){
                    $img=$request->img;
                    $nameimagen=uniqid().$img->getClientOriginalName();
                    $img->move(public_path()."/logos/cliente/", $nameimagen);
                    $cliente->img=$nameimagen;
                }
            }
        }else{
            if($request->hasFile('img')){
                $img=$request->img;
                $nameimagen=uniqid().$img->getClientOriginalName();
                $img->move(public_path()."/logos/cliente/", $nameimagen);
                $cliente->img=$nameimagen;
            }
        }
        $usuario->nombre=$request->nombre;
        $usuario->app=$request->app;
        $usuario->apm=$request->apm;
        $usuario->email=$request->email;
        $usuario->pass=md5($request->pass);
        $usuario->telefono=$request->telefono;
        $usuario->idtu=3;
        $usuario->save();
        $idu=Usuario::where('email', '=', $request->email)->get();
        $idu=$idu[0]->idu;
        $cliente->idm=$request->idm;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numint;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
        $cliente->idu=$idu;
        $cliente->save();
        return redirect("/clientes")->with('success', 'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*=============================================
	    Eliminacion del cliente
	=============================================*/
    public function destroy($idcl)
    {
        $cliente=Cliente::FindOrFail($idcl);
        $usuario=Usuario::findOrFail($cliente->idu);
        if(file_exists(public_path()."/logos/cliente/".$cliente->img)){
            unlink(public_path()."/logos/cliente/".$cliente->img);
            }
        $cliente->delete();
        $usuario->delete();
        return redirect("/clientes")->with('success', 'delete');
    }
}
