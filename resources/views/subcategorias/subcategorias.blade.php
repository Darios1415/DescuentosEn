@extends('layout')
    @section('content')


    <a href="index"><button>Regresar</button></a>
    <br><br><br>

    <form action="{{route('subcategorias.store')}}" method="post">
        {{csrf_field()}}
        <br>
            <label>Categorias:</label>
    <select name="idc">
            <option>--Selecciones una Categoria--</option>
            @foreach($categoria as $cat)
        <option value="{{$cat->idc}}">{{$cat ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Subcategoria:</label>
            <input type="text" name="nombre" placeholder="Nueva subcategoria" value="{{old('nombre')}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
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
            <td>{{$item->categoria->nombre}}</td>
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
@endsection
