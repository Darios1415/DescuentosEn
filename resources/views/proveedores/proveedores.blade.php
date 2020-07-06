@extends('layout')
    @section('content')
    <a href="index"><button>Regresar</button></a>
    <br><br><br>
    <form action="{{route('proveedores.store')}}" method="Post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label >Marca:</label>
        <input type="text" name="marca" placeholder="Marca" value="{{old('marca')}}">
        {!! $errors->first('marca', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label >Nombre:</label>
        <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Apellido paterno:</label><br>
        <input type="text" name="app" placeholder="Apellido paterno" value="{{old('app')}}">
        {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Apellido materno: </label>
        <input type="text" name="apm" placeholder="Precio" value="{{old('apm')}}">
        {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Telefono: </label>
        <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}">
        {!! $errors->first('telefono', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Clabe: </label>
        <input type="text" name="clabe" placeholder="Clabe" value="{{old('clabe')}}">
        {!! $errors->first('existencia', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Colonia: </label>
        <input type="text" name="colonia" placeholder="colonia" value="{{old('colonia')}}">
        {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Numero interior: </label>
        <input type="text" name="numint" placeholder="Numero de interior" value="{{old('numint')}}">
        {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Numero exterior: </label>
        <input type="text" name="numext" placeholder="Numero de exterior" value="{{old('numext')}}">
        {!! $errors->first('numext', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Codigo postal: </label>
        <input type="text" name="cp" placeholder="C.P" value="{{old('numext')}}">
        {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Imagen del proveedor: </label>
        <input type="file" name="logo" placeholder="Logo" >
        <br><br>
        <label>Correo electronico: </label>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
        {!! $errors->first('email', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña" value="{{old('pass')}}">
        {!! $errors->first('pass', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <table border="">
        <tr>
            <td>Marca</td>
            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Telefono</td>
            <td>Clabe</td>
            <td>Colonia</td>
            <td>Num. interior</td>
            <td>Num. exterior</td>
            <td>C.P</td>
            <td>Logo</td>
            <td>Correo</td>
            <td>Contraseña</td>
        </tr>
        @foreach ($proveedor as $item)
         <tr>
            <td>{{$item->marca}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->app}}</td>
            <td>{{$item->apm}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->clabe}}</td>
            <td>{{$item->colonia}}</td>
            <td>{{$item->numint}}</td>
            <td>{{$item->numext}}</td>
            <td>{{$item->cp}}</td>
            <td><img src="/logos/{{$item->logo}}" width="50px" alt=""></td>
            <td>{{$item->email}}</td>
            <td>{{$item->pass}}</td>

            <td><a href="{{route('proveedores.edit', $item->idpr)}}"><button>Editar</button></a></td>
            <td>
                <form method="POST" action="{{route('proveedores.destroy', $item->idpr)}}">
                    @method('DELETE')
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
        @endforeach
    </table>
    <br><br>
    @endsection
