<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cliente</title>
</head>
<body>
<form method="POST" action="{{route('clientes.update', $cliente->idcl)}}">
    @method('PUT')
    {{csrf_field()}}

    <label>Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" value="{{$cliente->nombre}}">
    <br><br>
    <label>Apellido Paterno: </label>
    <input type="text" name="app" placeholder="Ap. Paterno" value="{{$cliente->app}}">
    <br><br>
    <label>Apellido Materno: </label>
    <input type="text" name="apm" placeholder="Ap. Materno" value="{{$cliente->apm}}">
    <br><br>
    <label>Correo: </label>
    <input type="text" name="email" placeholder="email" value="{{$cliente->email}}">
    <br><br>
    <label>Contraseña: </label>
    <input type="password" name="pass" placeholder="Contraseña" value="{{$cliente->pass}}">
    <br><br>
    <label>Telefono: </label>
    <input type="text" name="telefono" placeholder="Telefono" value="{{$cliente->telefono}}">
    <br><br>
    <label>Colonia: </label>
    <input type="text" name="colonia" placeholder="Colonia" value="{{$cliente->colonia}}">
    <br><br>
    <label>Calle: </label>
    <input type="text" name="calle" placeholder="Calle" value="{{$cliente->calle}}">
    <br><br>
    <label>Num. Interior: </label>
    <input type="text" name="numint" placeholder="Num. Interior" value="{{$cliente->numint}}">
    <br><br>
    <label>Num. Exterior: </label>
    <input type="text" name="numext" placeholder="Num. Exterior" value="{{$cliente->numext}}">
    <br><br>
    <label>C.P: </label>
    <input type="text" name="cp" placeholder="Codigo Postal" value="{{$cliente->cp}}">
    <br><br>
    <input type="submit" value="Editar">
    </form>
</body>
</html>

