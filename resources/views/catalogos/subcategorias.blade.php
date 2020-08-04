@extends('layouts/admin')
@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">

<div class="card-header">
    <h3 class="card-title">Subcategorias</h3>
  </div>

    <form action="{{route('subcategorias.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
        <br>
            <label>Categorias:</label>
    <select name="idc" class="form-control">
            <option>--Selecciones una Categoria--</option>
            @foreach($categoria as $cat)
        <option value="{{$cat->idc}}">{{$cat ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idc', '<small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Subcategoria:</label>
            <input type="text" name="nombre" placeholder="Nueva subcategoria" value="{{old('nombre')}}" class="form-control">
        {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
         <br><br>
         <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </div>
    </form>
        </div>
      </div>
    </div>
</div>
    <script src="/plugins/jquery/jquery.min.js"></script>

@endsection
