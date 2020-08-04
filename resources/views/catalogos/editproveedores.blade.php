@extends('layouts/admin')
    @section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar proveedor {{$proveedor->nombre}}</h3>
                </div>
                    <form action="{{route('proveedores.update', $proveedor->idpr)}}" method="Post" enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label >Marca:</label>
                            <input type="text" name="marca" placeholder="Marca" value="{{$prroveedor->marca}}" class="form-control">
                        </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label >Nombre:</label>
                                    <input type="text" name="nombre" placeholder="Nombre" value="{{$proveedor->nombre}}" class="form-control">
                                    {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Apellido paterno:</label><br>
                                    <input type="text" name="app" placeholder="Apellido paterno" value="{{$proveedor->app}}" class="form-control">
                                    {!! $errors->first('app', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Apellido materno: </label>
                                    <input type="text" name="apm" placeholder="Precio" value="{{$proveedor->apm}}" class="form-control">
                                    {!! $errors->first('apm', '<small class="text-danger"">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Telefono: </label>
                            <input type="text" name="telefono" placeholder="Telefono" value="{{$proveedor->telefono}}" class="form-control" minlength="10" maxlength="10">
                            {!! $errors->first('telefono', '<small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <label>Clabe: </label>
                            <input type="text" name="clabe" placeholder="Clabe" value="{{$proveedor->clabe}}" class="form-control" minlength="18" maxlength="18">
                            {!! $errors->first('clabe', '<small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Colonia: </label>
                                    <input type="text" name="colonia" placeholder="colonia" value="{{$proveedor->colonia}}" class="form-control">
                                    {!! $errors->first('colonia', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Numero interior: </label>
                                    <input type="text" name="numint" placeholder="Numero de interior" value="{{$proveedor->numint}}" class="form-control">
                                    {!! $errors->first('numint', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Numero exterior: </label>
                                    <input type="text" name="numext" placeholder="Numero de exterior" value="{{$proveedor->numext}}" class="form-control">
                                    {!! $errors->first('numext', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Codigo postal: </label>
                                    <input type="text" name="cp" placeholder="C.P" value="{{$proveedor->cp}}" class="form-control" minlength="5" maxlength="5">
                                    {!! $errors->first('cp', '<small class="text-danger"">:message</small>') !!}
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Logo del proveedor: </label>
                                <input type="file" name="logo" placeholder="Logo" value="{{$proveedor->logo}}"  onchange="preview(this)">
                                {!! $errors->first('logo', '<br><small class="text-danger"">:message</small>') !!}
                                <br>
                                <img src="/logos/{{$proveedor->logo}}" width="100px" id="logo" alt="">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Correo electronico: </label>
                                        <input type="email" name="email" placeholder="Email" value="{{$proveedor->email}}" class="form-control">
                                        {!! $errors->first('email', '<small class="text-danger"">:message</small>') !!}
                                    </div>
                                    <div class="col">
                                        <label>Contraseña: </label>
                                        <input type="password" name="pass" placeholder="Contraseña" value="{{$proveedor->pass}}" class="form-control">
                                        {!! $errors->first('pass', '<small class="text-danger"">:message</small>') !!}
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
				document.getElementById("logo").src=e.target.result;
			}
			// El evento onerror se ejecuta si ha encontrado un error de lectura
			reader.onerror=function(e) {
				document.getElementById("logo").scr="";
				alert('Hubo un error al cargar la imagen');
			}
			// indicamos que lea la imagen seleccionado por el usuario de su disco duro
			reader.readAsDataURL(e.files[0]);
		}else{
			// El formato del archivo no es una imagen
			document.getElementById("logo").src="";
			alert("El archivo adjunto no es una imagen");
		}
	}
}
    </script>

<script src="/plugins/jquery/jquery.min.js"></script>
@endsection
