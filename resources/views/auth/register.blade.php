@extends('layouts/index')

@section('content')

<title>Descuentos en | Registro</title>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <!-- left column -->
      <div class="col-md-4 ">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-body">
            <h3>Registrar Usuario</h3>
        <form class="aa-login-form" action="{{route('register')}}" method="POST">
        @csrf
                <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Apellido Paterno:</label>
                <input type="text" name="app" placeholder="Ap.paterno" value="{{old('app')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Apellido Materno:</label>
                <input type="text" name="apm" placeholder="Ap. Materno" value="{{old('apm')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Correo:</label>
                <input type="email" name="email" placeholder="Correo" value="{{old('email')}}" class="form-control">
                </div>
                <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirmar Contraseña:</label>
                    <input type="password" name="pass_confirmation" placeholder="Contraseña" class="form-control">
                    </div>
            <div class="form-group">
                <label>Telefono:</label>
                <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}" class="form-control" minlength="10" maxlength="10">
            </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>
</div>
</div>
    </div>
</div>

 @endsection
