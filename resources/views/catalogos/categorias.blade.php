@extends('layouts/admin')
@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Categorias</h3>
            </div>
        <form action="{{route('categorias.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-body">
            <div class="form-group">
                <label>Categoria:</label>
                <input type="text" name="nombre" placeholder="Nueva Categoria" value="{{old('nombre')}}" class="form-control">
                {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
            </div>
            <div class="card-footer">
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
