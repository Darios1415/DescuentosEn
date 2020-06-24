<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar subcategoria</title>
</head>
<body>
<form method="GET" action="subcategorias/{{$subcategoria->idsc}}">
    <input type="hidden" name="_method" value="PUT">
    <label>Subcategoria:</label>
        <input type="text" name="nombre" value=" {{$subcategoria->nombre}}">
    <br><br>
     <input type="submit" value="Editar">
    </form>
</body>
</html>
