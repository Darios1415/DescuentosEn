@extends('layouts/admin')
    @section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Proveedores</h3>
                </div>
                <form action="{{route('proveedores.store')}}" method="Post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label >Marca:</label>
                        <input type="text" name="marca" placeholder="Marca" value="{{old('marca')}}" class="form-control">
                        {!! $errors->first('marca', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <label >Nombre:</label>
                            <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" class="form-control">
                            {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                            <label>Apellido paterno:</label><br>
                            <input type="text" name="app" placeholder="Apellido paterno" value="{{old('app')}}" class="form-control">
                            {!! $errors->first('app', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                            <label>Apellido materno: </label>
                            <input type="text" name="apm" placeholder="Ap. Materno" value="{{old('apm')}}" class="form-control">
                            {!! $errors->first('apm', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Telefono: </label>
                        <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}" class="form-control" minlength="10" maxlength="10">
                        {!! $errors->first('telefono', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label>Clabe Interbancaria: </label>
                        <input type="text" name="clabe" placeholder="Clabe" value="{{old('clabe')}}" class="form-control" minlength="18" maxlength="18">
                        {!! $errors->first('clabe', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Municipio:</label>
                                <select name="idm" class="form-control">
                                <option>--Seleccione un Municipio--</option>
                                @foreach($municipio as $mun)
                                <option value="{{$mun->idm}}">{{$mun->nombre}}</option>
                                @endforeach
                                </select>
                                {!! $errors->first('idm', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Colonia: </label>
                                <input type="text" name="colonia" placeholder="colonia" value="{{old('colonia')}}" class="form-control">
                                {!! $errors->first('colonia', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Numero interior: </label>
                                <input type="text" name="numint" placeholder="Numero de interior" value="{{old('numint')}}" class="form-control">
                                {!! $errors->first('numint', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Numero exterior: </label>
                                <input type="text" name="numext" placeholder="Numero de exterior" value="{{old('numext')}}" class="form-control">
                                {!! $errors->first('numext', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Codigo postal: </label>
                                <input type="text" name="cp" placeholder="C.P" value="{{old('cp')}}" class="form-control" minlength="5" maxlength="5">
                                {!! $errors->first('cp', '<small class="text-danger"">:message</small>') !!}
                            </div>
                                <div class="col">
                                <label>Colonia:</label>
                                <input type="text" name="colonia" placeholder="Colonia" value="{{old('colonia')}}" class="form-control">
                                {!! $errors->first('colonia', '<small class="text-danger"">:message</small>') !!}
                                </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Imagen del proveedor: </label>
                        <input type="file" name="logo" placeholder="Logo" >
                        {!! $errors->first('logo', '<br><small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Correo electronico: </label>
                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control">
                                {!! $errors->first('email', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Contraseña: </label>
                                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                                {!! $errors->first('pass', '<small class="text-danger"">:message</small>') !!}
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
