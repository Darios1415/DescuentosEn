<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <form action="{{route('clientes.create')}}" method="get">
        <label>Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre">
        <br><br>
        <label>Apellido Paterno: </label>
        <input type="text" name="app" placeholder="Ap. Paterno">
        <br><br>
        <label>Apellido Materno: </label>
        <input type="text" name="apm" placeholder="Ap. Materno">
        <br><br>
        <label>Correo: </label>
        <input type="text" name="email" placeholder="email">
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña">
        <br><br>
        <label>Telefono: </label>
        <input type="text" name="telefono" placeholder="Telefono">
        <br><br>
        <label>Colonia: </label>
        <input type="text" name="colonia" placeholder="Colonia">
        <br><br>
        <label>Calle: </label>
        <input type="text" name="calle" placeholder="Calle">
        <br><br>
        <label>Num. Interior: </label>
        <input type="text" name="numint" placeholder="Num. Interior">
        <br><br>
        <label>Num. Exterior: </label>
        <input type="text" name="numext" placeholder="Num. Exterior">
        <br><br>
        <label>C.P: </label>
        <input type="text" name="cp" placeholder="Codigo Postal">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <table border="">
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Correo</td>
            <td>Contraseña</td>
            <td>Telefono</td>
            <td>Colonia</td>
            <td>Calle</td>
            <td>Num. interior</td>
            <td>Num. exterior</td>
            <td>C.P</td>
        </tr>
        @foreach ($clientes as $item)
         <tr>
            <td>{{$item->idcl}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->app}}</td>
            <td>{{$item->apm}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->pass}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->colonia}}</td>
            <td>{{$item->calle}}</td>
            <td>{{$item->numint}}</td>
            <td>{{$item->numext}}</td>
            <td>{{$item->cp}}</td>
            <td><a href="{{route('clientes.edit', $item->idcl)}}"><button>Editar</button></a></td>
            <td>
                <form method="POST" action="{{route('clientes.destroy', $item->idcl)}}">
                    @method('DELETE') <td>
                <form method="POST" action="{{route('clientes.destroy', $item->idcl)}}">
                    @method('DELETE')
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
            @endforeach
    </table>
</body>
</html>
