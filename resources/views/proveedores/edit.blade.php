<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar proveedor</title>
</head>
<body>
<form method="POST" action="{{route('proveedores.update', $proveedor->idpr)}}">
    @method('PUT')
    {{csrf_field()}}

    <label>Marca: </label>
    <input type="text" name="marca" placeholder="Marca" value="{{$proveedor->marca}}">
    <br><br>
    <label>Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" value="{{$proveedor->nombre}}">
    <br><br>
    <label>Apellido Paterno: </label>
    <input type="text" name="app" placeholder="Ap. Paterno" value="{{$proveedor->app}}">
    <br><br>
    <label>Apellido Materno: </label>
    <input type="text" name="apm" placeholder="Ap. Materno" value="{{$proveedor->apm}}">
    <br><br>
    <label>Telefono: </label>
    <input type="text" name="telefono" placeholder="Telefono" value="{{$proveedor->telefono}}">
    <br><br>
    <label>Clabe: </label>
    <input type="text" name="clabe" placeholder="Clabe" value="{{$proveedor->clabe}}">
    <br><br>
    <label>Colonia: </label>
    <input type="text" name="colonia" placeholder="Colonia" value="{{$proveedor->colonia}}">
    <br><br>
    <label>Num. Interior: </label>
    <input type="text" name="numint" placeholder="Num. Interior" value="{{$proveedor->numint}}">
    <br><br>
    <label>Num. Exterior: </label>
    <input type="text" name="numext" placeholder="Num. Exterior" value="{{$proveedor->numext}}">
    <br><br>
    <label>C.P: </label>
    <input type="text" name="cp" placeholder="Codigo Postal" value="{{$proveedor->cp}}">
    <br><br>
    <label>Logo: </label>
    <input type="text" name="logo" placeholder="logo" value="{{$proveedor->logo}}">
    <br><br>
    <label>Correo: </label>
    <input type="text" name="email" placeholder="email" value="{{$proveedor->email}}">
    <br><br>
    <label>Contraseña: </label>
    <input type="password" name="pass" placeholder="Contraseña" value="{{$proveedor->pass}}">
    <br><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>

