    @extends('layouts/index')
    @section('content')
    <title>Descuentos en | Registro</title>
    <!-- seccion registro -->
    <section id="aa-myaccount">
    <div class="container" >
    <div class="row">
    <div class="col-md-12">
    <div class="aa-myaccount-area">
    <div class="row">
        <div class="col-md-6">
        <div class="aa-myaccount-register">
            <h4>Registrar</h4>

            <form class="aa-login-form" action="{{route('registro')}}" method="POST">
                @csrf
                <label for="">Nombre<span>*</span></label>
                <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" class="form-control">
                {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}

                <label for="">Correo electronico<span>*</span></label>
                <input type="email" name="email" placeholder="Correo" value="{{old('email')}}" class="form-control">
                {!! $errors->first('email', '<small class="text-danger"">:message</small>') !!}

                <label for="">Contraseña<span>*</span></label>
                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                {!! $errors->first('pass', '<small class="text-danger"">:message</small>') !!}

                <label for="">Confirmar contraseña<span>*</span></label>
                <input type="password" name="pass_confirmation" placeholder="Contraseña" class="form-control">
                {!! $errors->first('pass_confirmation', '<small class="text-danger"">:message</small>') !!}

                <label for="">Telefono<span>*</span></label>
                <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}" class="form-control" minlength="10" maxlength="10">
                {!! $errors->first('telefono', '<small class="text-danger"">:message</small>') !!}
                <button type="submit" value="Enviar" class="btn btn-primary">Registrar</button>
            </form>

        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    @endsection
    <!-- / Fin registro -->

<!--
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">

      <div class="col-md-4 ">

        <div class="card card-primary">
            <div class="card-body">
            <h3>Registrar Usuario</h3>
        <form class="aa-login-form" action="{{route('cliente.store')}}" method="POST">
        @csrf
                <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" class="form-control">
                {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Apellido Paterno:</label>
                <input type="text" name="app" placeholder="Ap.paterno" value="{{old('app')}}" class="form-control">
                {!! $errors->first('app', '<small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Apellido Materno:</label>
                <input type="text" name="apm" placeholder="Ap. Materno" value="{{old('apm')}}" class="form-control">
                {!! $errors->first('apm', '<small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Correo:</label>
                <input type="email" name="email" placeholder="Correo" value="{{old('email')}}" class="form-control">
                {!! $errors->first('email', '<small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                {!! $errors->first('pass', '<small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Confirmar Contraseña:</label>
                    <input type="password" name="pass_confirmation" placeholder="Contraseña" class="form-control">
                    {!! $errors->first('pass_confirmation', '<small class="text-danger"">:message</small>') !!}
                    </div>
            <div class="form-group">
                <label>Telefono:</label>
                <input type="text" name="telefono" placeholder="Telefono" value="{{old('telefono')}}" class="form-control" minlength="10" maxlength="10">
                {!! $errors->first('telefono', '<small class="text-danger"">:message</small>') !!}
            </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</div>
</div>
</div>
    </div>
</div>
-->

