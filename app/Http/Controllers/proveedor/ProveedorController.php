<?php

namespace App\Http\Controllers\proveedor;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Usuario;
use App\Municipio;
use App\Http\Requests\ValidacionProveedor;
use App\Http\Requests\ValidacionUsuario;
use App\Http\Controllers\Controller;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=session()->get('usuario');
        $proveedor=Proveedor::where('idu', '=', $usuario[0]->idu)->get();
        $municipio=Municipio::all();
        return view('proveedor/prov')
        ->with('usuario', $usuario)
        ->with('proveedor', $proveedor)
        ->with('municipio', $municipio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $proveedor=Proveedor::all();
        $usuario=Usuario::all();
        $municipio=Municipio::all();
        return view('/catalogos/proveedores', compact('proveedor'), compact('usuario', 'municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $img=$request->img;
            $nameimagen=uniqid().$img->getClientOriginalName();
            $img->move(public_path()."/logos/cliente/", $nameimagen);
        }
        $idu=Usuario::where('email', '=', $request->email)->get();
        $idu=$idu[0]->idu;
        $cliente=Cliente::findOrFail($idu);
        $cliente->idm=$request->idm;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numint;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
        $cliente->img=$nameimagen;
        $cliente->idu=$idu;
        $cliente->save();
        return redirect("/cliente");
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
    public function edit($id)
    {
        $cliente=Cliente::findOrFail($idu);
        $usuario=Usuario::findOrFail($cliente->idu);
        $municipio=Municipio::all();
        return view('//editclientes', compact('cliente'), compact('municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idpr)
    {
        $proveedor=Proveedor::findOrFail($idpr);
        $usuario=Usuario::findOrFail($proveedor->idu);
        if(file_exists(public_path()."/logos/proveedor/".$proveedor->logo)){
            if($request->hasFile('logo')){
                unlink(public_path()."/logos/proveedor/".$proveedor->logo);
                $logo=$request->logo;
                $namelogo=uniqid().$logo->getClientOriginalName();
                $logo->move(public_path()."/logos/proveedor/", $namelogo);
                $proveedor->logo=$namelogo;
            }else{
                if($request->hasFile('logo')){
                    $logo=$request->logo;
                    $namelogo=uniqid().$logo->getClientOriginalName();
                    $logo->move(public_path()."/logos/proveedor/", $namelogo);
                    $proveedor->img=$namelogo;
                }
            }
        }else{
            if($request->hasFile('logo')){
                $logo=$request->logo;
                $namelogo=uniqid().$logo->getClientOriginalName();
                $logo->move(public_path()."/logos/proveedor/", $namelogo);
                $proveedor->img=$namelogo;
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

        $proveedor->marca=$request->marca;
        $proveedor->clabe=$request->clabe;
        $proveedor->colonia=$request->colonia;
        $proveedor->numint=$request->numext;
        $proveedor->numext=$request->numext;
        $proveedor->cp=$request->cp;
        $proveedor->idm=$request->idm;
        $proveedor->save();
        return redirect("/proveedor");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::FindOrFail($idcl);
        $usuario=Usuario::findOrFail($cliente->idu);
        unlink(public_path()."/logos/".$cliente->img);
        $cliente->delete();
        $usuario->delete();
        return redirect("/cliente");
    }
}
