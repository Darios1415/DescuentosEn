@extends('layout')
    @section('content')

    <a href="/clientes"><button>Regresar</button></a>
    <br><br>
<form method="POST" action="{{route('clientes.update', $cliente->idcl)}}" >
    @method('PUT')
    {{csrf_field()}}

    <label>Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" value="{{$cliente->nombre}}" >
    {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Apellido Paterno: </label>
    <input type="text" name="app" placeholder="Ap. Paterno" value="{{$cliente->app}}">
    {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Apellido Materno: </label>
    <input type="text" name="apm" placeholder="Ap. Materno" value="{{$cliente->apm}}">
    {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Correo: </label>
    <input type="text" name="email" placeholder="email" value="{{$cliente->email}}">
    {!! $errors->first('email', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Contraseña: </label>
    <input type="password" name="pass" placeholder="Contraseña" value="{{$cliente->pass}}">
    {!! $errors->first('pass', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Telefono: </label>
    <input type="text" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}">
    {!! $errors->first('telefono', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Municipio: </label>
    <select name="idm">
        <option>--Selecciones categoria--</option>
        @foreach($municipio as $mun)
    <option value="{{$mun->idm}}" @if ($mun->idm===$cliente->idm)
        selected="selected"
    @endif>{{$mun ->nombre}}</option>
        @endforeach
    </select>
    {!! $errors->first('idm', '<br><small class="text-danger"">:message</small><br>') !!}
    <br><br>
    <label>Colonia: </label>
    <input type="text" name="colonia" placeholder="Colonia" value="{{$cliente->colonia}}">
    {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Calle: </label>
    <input type="text" name="calle" placeholder="Calle" value="{{$cliente->calle}}">
    {!! $errors->first('calle', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Num. Interior: </label>
    <input type="text" name="numint" placeholder="Num. Interior" value="{{$cliente->numint}}">
    {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Num. Exterior: </label>
    <input type="text" name="numext" placeholder="Num. Exterior" value="{{$cliente->numext}}">
    {!! $errors->first('numext', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>C.P: </label>
    <input type="text" name="cp" placeholder="Codigo Postal" value="{{$cliente->cp}}">
    {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <input type="submit" value="Editar">

</form>
    @endsection

