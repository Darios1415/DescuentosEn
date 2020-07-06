@extends('layout')
    @section('content')

    <a href="index"><button>Regresar</button></a>
    <br><br><br>
    <form action="{{route('clientes.store')}}" method="post">
        {{csrf_field()}}
        <label>Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Apellido Paterno: </label>
        <input type="text" name="app" placeholder="Ap. Paterno" value="{{old('app')}}">
        {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Apellido Materno: </label>
        <input type="text" name="apm" placeholder="Ap. Materno" value="{{old('apm')}}">
        {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Correo: </label>
        <input type="text" name="email" placeholder="email" value="{{old('email')}}">
        {!! $errors->first('email', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña">
        {!! $errors->first('pass', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Telefono: </label>
        <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}">
        {!! $errors->first('telefono', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Municipio: </label>
        <select name="idm">
            <option>--Selecciones municipio--</option>
            @foreach($municipio as $mun)
                <option value="{{$mun->idm}}">{{$mun ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idm', '<br><small class="text-danger"">:message</small><br>') !!}
        <br><br>
        <label>Colonia: </label>
        <input type="text" name="colonia" placeholder="Colonia" value="{{old('colonia')}}">
        {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Calle: </label>
        <input type="text" name="calle" placeholder="Calle" value="{{old('calle')}}">
        {!! $errors->first('calle', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Num. Interior: </label>
        <input type="text" name="numint" placeholder="Num. Interior" value="{{old('numint')}}">
        {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Num. Exterior: </label>
        <input type="text" name="numext" placeholder="Num. Exterior" value="{{old('numext')}}">
        {!! $errors->first('numext', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>C.P: </label>
        <input type="text" name="cp" placeholder="Codigo Postal" value="{{old('cp')}}">
        {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <table border="">
        <tr>

            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Correo</td>
            <td>Contraseña</td>
            <td>Telefono</td>
            <td>id municipio</td>
            <td>Colonia</td>
            <td>Calle</td>
            <td>Num. interior</td>
            <td>Num. exterior</td>
            <td>C.P</td>
        </tr>
        @foreach ($clientes as $item)
         <tr>

            <td>{{$item->nombre}}</td>
            <td>{{$item->app}}</td>
            <td>{{$item->apm}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->pass}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->municipio->nombre}}</td>
            <td>{{$item->colonia}}</td>
            <td>{{$item->calle}}</td>
            <td>{{$item->numint}}</td>
            <td>{{$item->numext}}</td>
            <td>{{$item->cp}}</td>
            <td><a href="{{route('clientes.edit', $item->idcl)}}"><button>Editar</button></a></td>
            <td>
                <form method="POST" action="{{route('clientes.destroy', $item->idcl)}}">
                    @method('DELETE')
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
            @endforeach
    </table>
    <br><br><br>
@endsection
