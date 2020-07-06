extends('layout')
    @section('content')
    <a href="proveedores"><button>Regresar</button></a>
    <br><br><br>
    <form action="{{route('proveedores.update', $proveedor->idpr)}}" method="Post" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <label >Marca:</label>
        <input type="text" name="marca" placeholder="Marca" value="{{$prroveedor->marca}}">
        <br><br>
        <label >Nombre:</label>
        <input type="text" name="nombre" placeholder="Nombre" value="{{$proveedor->nombre}}">
        <br><br>
        <label>Apellido paterno:</label><br>
        <input type="text" name="app" placeholder="Apellido paterno" value="{{$proveedor->app}}">
        <br><br>
        <label>Apellido materno: </label>
        <input type="text" name="apm" placeholder="Precio" value="{{$proveedor->apm}}">
        <br><br>
        <label>Telefono: </label>
        <input type="text" name="telefono" placeholder="Telefono" value="{{$proveedor->telefono}}">
        <br><br>
        <label>Clabe: </label>
        <input type="text" name="clabe" placeholder="Clabe" value="{{$proveedor->clabe}}">
        <br><br>
        <label>Colonia: </label>
        <input type="text" name="colonia" placeholder="colonia" value="{{$proveedor->colonia}}">
        <br><br>
        <label>Numero interior: </label>
        <input type="text" name="numint" placeholder="Numero de interior" value="{{$proveedor->numint}}">
        <br><br>
        <label>Numero exterior: </label>
        <input type="text" name="numext" placeholder="Numero de exterior" value="{{$proveedor->numext}}">
        <br><br>
        <label>Codigo postal: </label>
        <input type="text" name="cp" placeholder="C.P" value="{{$proveedor->cp}}">
        <br><br>
        <label>Logo del proveedor: </label>
        <input type="file" name="logo" placeholder="Logo" value="{{$proveedor->logo}}"  onchange="preview(this)">
        <br>
        <img src="/logos/{{$proveedor->logo}}" width="100px" id="logo" alt="">
        <br><br>
        <label>Correo electronico: </label>
        <input type="email" name="email" placeholder="Email" value="{{$proveedor->email}}">
        <br><br>
        <label>Contraseña: </label>
        <input type="password" name="pass" placeholder="Contraseña" value="{{$proveedor->pass}}">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
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
@endsection
