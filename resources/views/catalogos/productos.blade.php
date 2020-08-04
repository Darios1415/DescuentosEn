@extends('layouts/admin')
    @section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Productos</h3>
                </div>
                <form action="{{route('productos.store')}}" method="Post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" class="form-control">
                        {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label>Descripcion: </label><br>
                        <textarea name="descripcion" class="form-control">{{old('descripcion')}}</textarea>
                        {!! $errors->first('descripcion', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Precio: </label>
                                <input type="text" name="precio" placeholder="Precio" value="{{old('precio')}}" class="form-control">
                                {!! $errors->first('precio', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Comision: </label>
                                <input type="text" name="comision" placeholder="Comision" value="{{old('comision')}}" class="form-control">
                                {!! $errors->first('comision', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                            <label>Existencia: </label>
                            <input type="text" name="existencia" placeholder="Existencia" value="{{old('existencia')}}" class="form-control">
                            {!! $errors->first('existencia', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Descuento al cliente: </label>
                                <input type="text" name="descc" placeholder="Descuento al cliente" value="{{old('descc')}}" class="form-control">
                                {!! $errors->first('descc', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                            <label>Descuento al producto: </label>
                            <input type="text" name="descp" placeholder="Descuento al producto" value="{{old('descp')}}" class="form-control">
                            {!! $errors->first('descp', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Costo de envio: </label>
                                <input type="text" name="cost_env" placeholder="Costo de envio" value="{{old('cost_env')}}" class="form-control">
                                {!! $errors->first('cost_env', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Imagen del producto: </label>
                        <input type="file" name="img" placeholder="Imagen">
                        {!! $errors->first('img', '<br><small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Categorias:</label>
                                <select name="idc" class="form-control">
                                    <option>--Seleccione una Categoria--</option>
                                    @foreach($categoria as $cat)
                                    <option value="{{$cat->idc}}">{{$cat ->nombre}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('idc', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Subcategorias:</label>
                                <select name="idsc" class="form-control">
                                    <option>--Selecciones una Subcategoria--</option>
                                    @foreach($subcategoria as $sub)
                                    <option value="{{$sub->idsc}}">{{$sub ->nombre}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('idsc', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
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
