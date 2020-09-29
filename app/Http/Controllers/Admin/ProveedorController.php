<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proveedor;
use App\Usuario;
use App\Municipio;
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
        $admin=session()->get('usuario');
        $proveedor=Proveedor::all();
        $usuario=Usuario::all();
        $municipio=Municipio::all();
        return view('/tablas/proveedores')
        ->with('admin', $admin)
        ->with('proveedor', $proveedor)
        ->with('usuario', $usuario)
        ->with('municipio', $municipio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=session()->get('usuario');
        $proveedor=Proveedor::all();
        $usuario=Usuario::all();
        $municipio=Municipio::all();
        return view('/catalogos/proveedores')
        ->with('admin', $admin)
        ->with('proveedor', $proveedor)
        ->with('usuario', $usuario)
        ->with('municipio', $municipio);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('logo')){
            $logo=$request->logo;
            $namelogo=uniqid().$logo->getClientOriginalName();
            $logo->move(public_path()."/logos/proveedor/", $namelogo);
        }
        $usuario= new Usuario();
        $usuario->nombre=$request->nombre;
        $usuario->app=$request->app;
        $usuario->apm=$request->apm;
        $usuario->email=$request->email;
        $usuario->pass=md5($request->pass);
        $usuario->telefono=$request->telefono;
        $usuario->idtu=2;
        $usuario->save();
        $idu=Usuario::where('email', '=', $request->email)->get();
        $idu=$idu[0]->idu;
        $proveedor= new Proveedor();
        $proveedor->marca=$request->marca;
        $proveedor->clabe=$request->clabe;
        $proveedor->colonia=$request->colonia;
        $proveedor->numint=$request->numext;
        $proveedor->numext=$request->numext;
        $proveedor->cp=$request->cp;
        $proveedor->logo=$namelogo;
        $proveedor->idu=$idu;
        $proveedor->idm=$request->idm;
        $proveedor->save();
        return redirect("/proveedores")->with('success', 'ok');
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
        $admin=session()->get('usuario');
        $proveedor=Proveedor::findOrFail($idpr);
        $usuario=Usuario::findOrFail($proveedor->idu);
        $municipio=Municipio::all();
        return view('/catalogos/editproveedores')
        ->with('admin', $admin)
        ->with('proveedor', $proveedor)
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
        $idu=Usuario::where('email', '=', $request->email)->get();
        $idu=$idu[0]->idu;
        $proveedor->marca=$request->marca;
        $proveedor->clabe=$request->clabe;
        $proveedor->colonia=$request->colonia;
        $proveedor->numint=$request->numext;
        $proveedor->numext=$request->numext;
        $proveedor->cp=$request->cp;
        $proveedor->idu=$idu;
        $proveedor->idm=$request->idm;
        $proveedor->save();
        return redirect("/proveedores")->with('success', 'edit');
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
        $usuario=Usuario::findOrFail($proveedor->idu);
        if(file_exists(public_path()."/logos/proveedor/".$proveedor->logo)){
            unlink(public_path()."/logos/proveedor/".$proveedor->logo);
            }
        $proveedor->delete();
        $usuario->delete();
        return redirect("/proveedores")->with('success', 'delete');
    }
}
