@extends('layout')
    @section('content')
    <a href="productos"><button>Regresar</button></a>
    <br><br><br>
    <form action="{{route('productos.update', $producto->idpr)}}" method="Post" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <label >Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}">
        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descripcion: </label><br>
        <textarea name="descripcion" cols="60" rows="5"> {{$producto->descripcion}}</textarea>
        {!! $errors->first('descripcion', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Precio: </label>
        <input type="text" name="precio" placeholder="Precio" value="{{$producto->precio}}">
        {!! $errors->first('precio', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Comision: </label>
        <input type="text" name="comision" placeholder="Comision" value="{{$producto->comision}}">
        {!! $errors->first('comision', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Existencia: </label>
        <input type="text" name="existencia" placeholder="Existencia" value="{{$producto->existencia}}">
        {!! $errors->first('existencia', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descuento al cliente: </label>
        <input type="text" name="descc" placeholder="Descuento al cliente" value="{{$producto->descc}}">
        {!! $errors->first('descc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Descuento al producto: </label>
        <input type="text" name="descp" placeholder="Descuento al producto" value="{{$producto->descp}}">
        {!! $errors->first('descp', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Costo de envio: </label>
        <input type="text" name="cost_env" placeholder="Costo de envio" value="{{$producto->cost_env}}">
        {!! $errors->first('cost_env', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Imagen del producto: </label>
        <input type="file" name="img" placeholder="Imagen" value="{{$producto->img}}"  onchange="preview(this)">
        <br>
        <img src="/logos/{{$producto->img}}" width="100px" id="img" alt="">
        <br><br>
        <label>Categorias:</label>
        <select name="idc">
            <option>--Selecciones categoria--</option>
            @foreach($categoria as $cat)
        <option value="{{$cat->idc}}" @if ($cat->idc===$producto->idc)
            selected="selected"
        @endif>{{$cat ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <label>Subcategorias:</label>
        <select name="idsc">
            <option>--Selecciones Subcategoria--</option>
            @foreach($subcategoria as $sub)
        <option value="{{$sub->idsc}}" @if ($sub->idsc===$producto->idsc)
            selected="selected"
        @endif>{{$sub ->nombre}}</option>
            @endforeach
        </select>
        {!! $errors->first('idsc', '<br><small class="text-danger"">:message</small>') !!}
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
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
    @endsection
