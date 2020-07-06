@extends('layout')
    @section('content')


    <a href="/subcategorias"><button>Regresar</button></a>
    <br><br><br>
<form method="POST" action="{{route('subcategorias.update', $subcategoria->idsc)}}">
    @method('PUT')
    {{csrf_field()}}
    <label>Categoria:</label>
    <select name="idc">
        <option>--Selecciones categoria--</option>
        @foreach($categoria as $cat)
    <option value="{{$cat->idc}}" @if ($cat->idc===$subcategoria->idc)
        selected="selected"
    @endif>{{$cat ->nombre}}</option>
        @endforeach
    </select>
    {!! $errors->first('idc', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>
    <label>Subcategoria:</label>
        <input type="text" name="nombre" value="{{$subcategoria->nombre}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
    <br><br>

     <input type="submit" value="Editar">
    </form>
    @endsection


