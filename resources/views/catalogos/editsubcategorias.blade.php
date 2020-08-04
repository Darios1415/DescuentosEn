@extends('layouts/admin')
    @section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Subcategoria {{$subcategoria->nombre}}</h3>
                </div>
                <form method="POST" action="{{route('subcategorias.update', $subcategoria->idsc)}}">
                @method('PUT')
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Categoria:</label>
                        <select name="idc" class="form-control">
                            <option>--Selecciones categoria--</option>
                            @foreach($categoria as $cat)
                            <option value="{{$cat->idc}}" @if ($cat->idc===$subcategoria->idc)
                            selected="selected"
                            @endif>{{$cat ->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idc', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label>Subcategoria:</label>
                        <input type="text" name="nombre" value="{{$subcategoria->nombre}}" class="form-control">
                        {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Editar" class="btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="/plugins/jquery/jquery.min.js"></script>

    @endsection


