<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Municipio;
use App\Usuario;
use App\Http\Requests\ValidacionUsuario;
use App\Http\Requests\ValidacionCliente;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $usuario=session()->get('usuario');
        $cliente=Cliente::where('idu', '=', $usuario[0]->idu)->get();
        $municipio=Municipio::all();
        return view('cliente/client')
        ->with('usuario', $usuario)
        ->with('cliente', $cliente)
        ->with('municipio', $municipio);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro(ValidacionUsuario $request){
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
        $cliente->idu=$idu;
        $cliente->save();
        return redirect("/cliente");
    }


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
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idu)
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
    public function update(Request $request, $idcl)
    {
        $cliente=Cliente::findOrFail($idcl);
        $usuario=Usuario::findOrFail($cliente->idu);
        if(file_exists(public_path()."/logos/cliente/".$cliente->img)){
            if($request->hasFile('img')){
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
        $usuario->app=$request->app;
        $usuario->apm=$request->apm;
        $usuario->idtu=3;
        $usuario->save();
      //  $idu=Usuario::where('idu', '=', $request->idu)->get();
       // $idu=$idu[0]->idu;
        $cliente->idm=$request->idm;
        $cliente->colonia=$request->colonia;
        $cliente->calle=$request->calle;
        $cliente->numint=$request->numint;
        $cliente->numext=$request->numext;
        $cliente->cp=$request->cp;
       // $cliente->idu=$idu;
        $cliente->save();
        return redirect("/cliente");
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
        $usuario=Usuario::findOrFail($cliente->idu);
        unlink(public_path()."/logos/".$cliente->img);
        $cliente->delete();
        $usuario->delete();
        return redirect("/cliente");
    }
}
