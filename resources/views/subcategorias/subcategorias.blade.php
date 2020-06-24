<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategorias</title>
</head>
<body>
    <form action="subcategorias/create" method="GET">
            <label>Categorias:</label>
        <select name="idc">
            <option>--Selecciones una Categoria--</option>
            @foreach($categoria as $cat)
        <option value="{{$cat->idc}}">{{$cat ->nombre}}</option>
            @endforeach
        </select>

        <br><br>
        <label>Subcategoria:</label>
            <input type="text" name="nombre" placeholder="Nueva subcategoria">
         <br><br>
         <input type="submit" value="Enviar">
    </form>

    <br><br>
    <table border="">
        <tr>
            <td>Categoria</td>
            <td>Subcategoria</td>
            <td>Accion</td>
        </tr>
        @foreach ($subcategoria as $item)
         <tr>
            <td>{{$item->idc}}</td>
            <td>{{$item->nombre}}</td>
            <td><a href="{{route('subcategorias.edit', $item->idsc)}}"><button>Editar</button></a></td>
            <td>
                <form method="POST" action="{{route('subcategorias.destroy', $item->idsc)}}">
                    @method('DELETE')
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
        @endforeach
    </table>
</body>
</html>
