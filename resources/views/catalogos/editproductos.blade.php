@extends('layouts/admin')
@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Producto {{$producto->nombre}}</h3>
            </div>
            <form action="{{route('productos.update', $producto->idpr)}}" method="Post" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}" class="form-control">
                        {!! $errors->first('nombre', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label>Descripcion: </label><br>
                        <textarea name="descripcion" class="form-control"> {{$producto->descripcion}}</textarea>
                        {!! $errors->first('descripcion', '<small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Precio: </label>
                                <input type="text" name="precio" placeholder="Precio" value="{{$producto->precio}}" class="form-control">
                                {!! $errors->first('precio', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Comision: </label>
                                <input type="text" name="comision" placeholder="Comision" value="{{$producto->comision}}" class="form-control">
                                {!! $errors->first('comision', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Existencia: </label>
                                <input type="text" name="existencia" placeholder="Existencia" value="{{$producto->existencia}}" class="form-control">
                                {!! $errors->first('existencia', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Descuento al cliente: </label>
                                <input type="text" name="descc" placeholder="Descuento al cliente" value="{{$producto->descc}}" class="form-control">
                                {!! $errors->first('descc', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Descuento al producto: </label>
                                <input type="text" name="descp" placeholder="Descuento al producto" value="{{$producto->descp}}" class="form-control">
                                {!! $errors->first('descp', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Costo de envio: </label>
                                <input type="text" name="cost_env" placeholder="Costo de envio" value="{{$producto->cost_env}}" class="form-control">
                                {!! $errors->first('cost_env', '<small class="text-danger"">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Imagen del producto: </label>
                        <input type="file" name="img" placeholder="Imagen" value="/logos/{{$producto->img}}" onchange="preview(this)">
                        <br>
                        <img src="/logos/{{$producto->img}}" width="100px" id="img" alt="">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>Categorias:</label>
                                <select name="idc" class="form-control">
                                <option>--Seleccione categoria--</option>
                                @foreach($categoria as $cat)
                                <option value="{{$cat->idc}}" @if ($cat->idc===$producto->idc)
                                selected="selected"
                                @endif>{{$cat ->nombre}}</option>
                                @endforeach
                                </select>
                                {!! $errors->first('idc', '<small class="text-danger"">:message</small>') !!}
                            </div>
                            <div class="col">
                                <label>Subcategorias:</label>
                                <select name="idsc" class="form-control">
                                <option>--Seleccione Subcategoria--</option>
                                @foreach($subcategoria as $sub)
                                <option value="{{$sub->idsc}}" @if ($sub->idsc===$producto->idsc)
                                selected="selected"
                                @endif>{{$sub ->nombre}}</option>
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
			// El evento onload se ejecuta cada vez que se ha leido el archivo			// correctamente
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
