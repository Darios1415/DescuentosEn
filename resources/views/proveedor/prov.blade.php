@foreach ($usuario as $item)

@endforeach
@foreach ($proveedor as $prov)

@endforeach
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Datos del proveedor {{$item->nombre}}</h3>
                </div>
                <form action="{{route('proveedor.update',  $proveedor[0]->idpr)}}" method="Post" enctype="multipart/form-data">
                @method('Patch')
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label >Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre" value="{{$item->nombre}}" class="form-control">
                            {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Apellido Paterno: </label><br>
                            <input  type="text" name="app" placeholder="Ap. paterno" value="{{$item->app}}" class="form-control">
                            {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Apellido Materno: </label>
                            <input type="text" name="apm" placeholder="Ap. Materno" value="{{$item->apm}}" class="form-control">
                            {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    </div>
                </div>
                <div class="form-group">
                    <label>Marca: </label>
                    <input type="text" name="marca" placeholder="Marca" value="{{$proveedor[0]->marca}}" class="form-control">
                    {!! $errors->first('marca', '<br><small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <label>Clave interbancaria: </label>
                    <input type="text" name="clabe" placeholder="Clabe" value="{{$proveedor[0]->marca}}" class="form-control" minlength="12" maxlength="12">
                    {!! $errors->first('marca', '<br><small class="text-danger"">:message</small>') !!}
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Colonia: </label>
                            <input type="text" name="colonia" placeholder="Colonia" value="{{$proveedor[0]->colonia}}" class="form-control">
                            {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Municipio:</label>
                            <select name="idm" class="form-control">
                            <option>--Seleccione municipio--</option>
                            @foreach($municipio as $mun)
                            <option value="{{$mun->idm}}" @if ($mun->idm===$proveedor[0]->idm)
                            selected="selected"
                            @endif>{{$mun->nombre}}</option>{{$mun->nombre}}
                            @endforeach
                            </select>
                            {!! $errors->first('idm', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Numero interior: </label>
                            <input type="text" name="numint" placeholder="Num. interior" value="{{$proveedor[0]->numint}}" class="form-control">
                            {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Numero exterior: </label>
                            <input type="text" name="numext" placeholder="Num. exterior" value="{{$proveedor[0]->numext}}" class="form-control">
                            {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="col">
                            <label>Codigo Postal: </label>
                            <input type="text" name="cp" placeholder="C.P" value="{{$proveedor[0]->cp}}" class="form-control" minlength="5" maxlength="5">
                            {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Imagen del proveedor: </label>
                    <input type="file" name="logo" placeholder="Logo" value="{{$proveedor[0]->logo}}"  onchange="preview(this)">
                    <br>
                    <img src="/logos/proveedor/{{$proveedor[0]->logo}}" width="100px" id="img" alt="">
                </div>
                <div class="card-footer">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </form>
            {{$proveedor[0]->marca}}
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
