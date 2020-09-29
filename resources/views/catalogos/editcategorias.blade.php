@extends('layouts/admin')
    @section('content')

<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Editar Categoria {{$categoria->nombre}}</h3>
                </div>
                <form method="POST" action="{{route('categorias.update', $categoria->idc)}}" enctype="multipart/form-data">
                @method('Patch')
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label>Categoria:</label>
                        <input type="text" name="nombre" value="{{$categoria->nombre}}" class="form-control">
                        {!! $errors->first('nombre', '<br><small class="text-danger"">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label>Imagen de categoria: </label>
                        <input type="file" name="ruta" placeholder="Imagen" value="{{$categoria->ruta}}"  onchange="preview(this)">
                        <br>
                        <img src="/logos/categoria/{{$categoria->ruta}}" width="100px" id="img" alt="">
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Editar" class="btn btn-primary">
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
            document.getElementById("ruta").src=e.target.result;
        }
        // El evento onerror se ejecuta si ha encontrado un error de lectura
        reader.onerror=function(e) {
            document.getElementById("ruta").scr="";
            alert('Hubo un error al cargar la imagen');
        }
        // indicamos que lea la imagen seleccionado por el usuario de su disco duro
        reader.readAsDataURL(e.files[0]);
    }else{
        // El formato del archivo no es una imagen
        document.getElementById("ruta").src="";
        alert("El archivo adjunto no es una imagen");
    }
}
}
</script>

    <script src="/plugins/jquery/jquery.min.js"></script>
    @endsection


