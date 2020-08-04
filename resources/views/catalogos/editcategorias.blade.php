@extends('layouts/admin')
    @section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Categoria {{$categoria->nombre}}</h3>
                </div>
                <form method="POST" action="{{route('categorias.update', $categoria->idc)}}">
                @method('PUT')
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Categoria:</label>
                        <input type="text" name="nombre" value="{{$categoria->nombre}}" class="form-control">
                        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
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


