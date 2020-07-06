@extends('layout')
    @section('content')
    <a href="index"><button>Regresar</button></a>
    <br><br><br>
    <form action="{{route('productos.store')}}" method="Post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label >Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descripcion: </label><br>
        <textarea name="descripcion" cols="60" rows="5">{{old('descripcion')}}</textarea>
        <br><br>
        <label>Precio: </label>
        <input type="text" name="precio" placeholder="Precio" value="{{old('precio')}}">
        {!! $errors->first('precio', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Comision: </label>
        <input type="text" name="comision" placeholder="Comision" value="{{old('comision')}}">
        {!! $errors->first('comision', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Existencia: </label>
        <input type="text" name="existencia" placeholder="Existencia" value="{{old('existencia')}}">
        {!! $errors->first('existencia', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descuento al cliente: </label>
        <input type="text" name="descc" placeholder="Descuento al cliente" value="{{old('descc')}}">
        {!! $errors->first('descc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descuento al producto: </label>
        <input type="text" name="descp" placeholder="Descuento al producto" value="{{old('descp')}}">
        {!! $errors->first('descp', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Costo de envio: </label>
        <input type="text" name="cost_env" placeholder="Costo de envio" value="{{old('cost_env')}}">
        {!! $errors->first('cost_env', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Imagen del producto: </label>
        <input type="file" name="img" placeholder="Imagen" >
        <br><br>
        <label>Categorias:</label>
    <select name="idc">
            <option>--Selecciones una Categoria--</option>
            @foreach($categoria as $cat)
        <option value="{{$cat->idc}}">{{$cat ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Subcategorias:</label>
    <select name="idsc">
            <option>--Selecciones una Subcategoria--</option>
            @foreach($subcategoria as $sub)
        <option value="{{$sub->idsc}}">{{$sub ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idsc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>

    <table border="">
        <tr>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Precio</td>
            <td>Comision</td>
            <td>Existencia</td>
            <td>Descuento al cliente</td>
            <td>Descuento al proveedor</td>
            <td>Costo de Envio</td>
            <td>Imagen</td>
            <td>Categoria</td>
            <td>Subcategoria</td>
            <td>Accion</td>
        </tr>
        @foreach ($producto as $item)
         <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->comision}}</td>
            <td>{{$item->existencia}}</td>
            <td>{{$item->descc}}</td>
            <td>{{$item->descp}}</td>
            <td>{{$item->cost_env}}</td>
            <td><img src="/logos/{{$item->img}}" width="50px" alt=""></td>
            <td>{{$item->categoria->nombre}}</td>
            <td>{{$item->subcategoria->nombre}}</td>

            <td><a href="{{route('productos.edit', $item->idpr)}}"><button>Editar</button></a></td>
            <td>
                <form method="POST" action="{{route('productos.destroy', $item->idpr)}}">
                    @method('DELETE')
                    {{csrf_field()}}
                    <BUtton>Eliminar</BUtton>
                </form>
            </td>
        @endforeach
    </table>
    <br><br>
    @endsection
