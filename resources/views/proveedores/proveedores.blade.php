<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <form action="{{route('proveedores.create')}}" method="get" >
        <label>Marca: </label>
        <input type="text" name="marca" placeholder="Marca">
        <br><br>
        <label>Nombre: </label>
        <input type="text" name="nombre" placeholder="Nombre">
        <br><br>
        <label>Apellido Paterno: </label>
        <input type="text" name="app" placeholder="Ap. Paterno">
        <br><br>
        <label>Apellido Materno: </label>
        <input type="text" name="apm" placeholder="Ap. Materno">
        <br><br>
        <label>Telefono: </label>
        <input type="text" name="telefono" placeholder="Telefono">
        <br><br>
        <label>Clabe: </label>
        <input type="text" name="clabe" placeholder="Clabe">
        <br><br>
        <label>Colonia: </label>
        <input type="text" name="colonia" placeholder="Colonia">
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
        <label>Logo: </label>
        <input type="text" name="logo" placeholder="logo">
        <br><br>
        <label>Correo: </label>
        <input type="text" name="email" placeholder="email">
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <table border="">
        <tr>
            <td>id</td>
            <td>Marca</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Telefono</td>
            <td>Calabe</td>
            <td>Colonia</td>
            <td>Num. interior</td>
            <td>Num. exterior</td>
            <td>C.P</td>
            <td>logo</td>
            <td>Correo</td>
            <td>Contraseña</td>
        </tr>
        @foreach ($proveedor as $item)
         <tr>
            <td>{{$item->idpr}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->app}}</td>
            <td>{{$item->apm}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->calabe}}</td>
            <td>{{$item->colonia}}</td>
            <td>{{$item->numint}}</td>
            <td>{{$item->numext}}</td>
            <td>{{$item->cp}}</td>
            <td>{{$item->logo}}</td>
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
</body>
</html>
