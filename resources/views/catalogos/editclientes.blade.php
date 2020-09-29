@extends('layouts/admin')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Datos del cliente {{$usuario->nombre}}</h3>
                </div>
                <form action="{{route('clientes.update',  $cliente->idcl)}}" method="Post" enctype="multipart/form-data">
                @method('Patch')
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label >Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre" value="{{$usuario->nombre}}" class="form-control">
                            {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Apellido Paterno: </label><br>
                            <input  type="text" name="app" placeholder="Ap. paterno" value="{{$usuario->app}}" class="form-control">
                            {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Apellido Materno: </label>
                            <input type="text" name="apm" placeholder="Ap. Materno" value="{{$usuario->apm}}" class="form-control">
                            {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Correo: </label>
                            <input type="text" name="email" placeholder="Correo" value="{{$usuario->email}}" class="form-control">
                        </div>
                        <div class="col">
                            <label>Contraseña: </label>
                            <input type="password" name="pass" placeholder="Contraseña" value="{{$usuario->pass}}" class="form-control">
                            {!! $errors->first('existencia', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Telefono: </label>
                    <input type="text" name="telefono" placeholder="Telefono" value="{{$usuario->telefono}}" class="form-control" minlength="10" maxlength="10">
                    {!! $errors->first('telefono', '<br><small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Municipio:</label>
                            <select name="idm" class="form-control">
                            <option>--Seleccione municipio--</option>
                            @foreach($municipio as $mun)
                            <option value="{{$mun->idm}}" @if ($mun->idm===$cliente->idm)
                            selected="selected"
                            @endif>{{$mun->nombre}}</option>{{$mun->nombre}}
                            @endforeach
                            </select>
                            {!! $errors->first('idm', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Colonia: </label>
                            <input type="text" name="colonia" placeholder="Colonia" value="{{$cliente->colonia}}" class="form-control">
                            {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Calle: </label>
                            <input type="text" name="calle" placeholder="Calle" value="{{$cliente->calle}}" class="form-control">
                            {!! $errors->first('calle', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Numero interior: </label>
                            <input type="text" name="numint" placeholder="Num. interior" value="{{$cliente->numint}}" class="form-control">
                            {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Numero exterior: </label>
                            <input type="text" name="numext" placeholder="Num. exterior" value="{{$cliente->numext}}" class="form-control">
                            {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Codigo Postal: </label>
                            <input type="text" name="cp" placeholder="C.P" value="{{$cliente->cp}}" class="form-control" minlength="5" maxlength="5">
                            {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Imagen del cliente: </label>
                    <input type="file" name="img" placeholder="Imagen" value="{{$cliente->img}}"  onchange="preview(this)">
                    <br>
                    <img src="/logos/{{$cliente->img}}" width="100px" id="img" alt="">
                </div>
                <div class="card-footer">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
    <script>
        function preview(e)
{
	if(e.files && e.files[0]){
		// Comprobamos que sea un formato de imagen
		if (e.files[0].type.match('image.*')) {
			// Inicializamos un FileReader. permite que las aplicaciones web lean
			// ficheros (o información en buffer) almacenados en el cliente de forma
			// asíncrona
			// Mas info en: https://developer.mozilla.org/es/docs/Web/API/FileReader
			var reader=new FileReader();
			// El evento onload se ejecuta cada vez que se ha leido el archivo
			// correctamente
			reader.onload=function(e) {
				document.getElementById("img").src=e.target.result;
			}
			// El evento onerror se ejecuta si ha encontrado un error de lectura
			reader.onerror=function(e) {
				document.getElementById("img").scr="";
				alert('Hubo un error al cargar la imagen');
			}
			// indicamos que lea la imagen seleccionado por el usuario de su disco duro
			reader.readAsDataURL(e.files[0]);
		}else{
			// El formato del archivo no es una imagen
			document.getElementById("img").src="";
			alert("El archivo adjunto no es una imagen");
		}
	}
}
    </script>

<script src="/plugins/jquery/jquery.min.js"></script>
@endsection
