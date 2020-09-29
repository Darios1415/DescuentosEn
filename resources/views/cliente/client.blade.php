
@extends('layouts/index')
@section('content')

@foreach ($usuario as $usu)
@endforeach
@foreach ($cliente as $cli)

@endforeach
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
            src="/logos/cliente/{{$cli->img}}" width="100px" alt="User profile picture">
                </div>

            <h3 class="profile-username text-center">{{$usu->nombre}}</h3>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                <b>Compras</b> <a class="float-right">1</a>
                </li>
                <li class="list-group-item">
                <b>Carrito</b> <a class="float-right">5</a>
                </li>
                <li class="list-group-item">
                <b>Lista de deseos</b> <a class="float-right">3</a>
                </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Comprar</b></a>
            </div>
            <!-- /.card-body -->
        </div>
            <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Sobre mi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <strong><i class="fas fa-user"></i>Referencia</strong>

            <p class="text-muted">
                Telefono: {{$usu->telefono}}<br>
                Correo:{{$usu->email}}

                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localizacion</strong>
            <p class="text-muted">Municipio: {{$cli->municipio}}.<br>
            Colonia:{{$cli->colonia}}. <br>  Calle: {{$cli->calle}}.<br>
                N°int: {{$cli->numint}}. <br> N°ext:{{$cli->numext}}. <br>  C.P: {{$cli->cp}}.
            </p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Mis productos en venta</strong>

            <p class="text-muted">
                <span class="tag tag-danger">Procesador</span>
                <span class="tag tag-success">Television</span>

                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Otro</strong>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Notificaciones</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Seguir compra</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configuracion</a></li>
            </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="js/dist/img/user1-128x128.jpg" alt="user image">
                    <span class="username">
                        <a href="#">Algun usuario</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Vendedor de algo- hace 5m.</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                    </p>

                    <p>

                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Visto</a>
                    <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Respuestas(2)
                        </a>
                    </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Responder ">
                </div>
                <!-- /.post -->


                <!-- Post -->
                <div class="post">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="js/dist/img/user6-128x128.jpg" alt="User Image">
                    <span class="username">
                        <a href="#">Pedro perez</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Vendedor de ..</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Fotos mas detallas de producto
                    </p>
                    <div class="row mb-3">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="js/dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="js/dist/img/photo2.png" alt="Photo">
                            <img class="img-fluid" src="js/dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="js/dist/img/photo4.jpg" alt="Photo">
                            <img class="img-fluid" src="js/dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <p>

                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> visto</a>
                    <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Respuesta(2)
                        </a>
                    </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Responder">
                </div>
                <!-- /.post -->
                </div>
                <div class="tab-pane" id="settings">
                    <form action="{{route('cliente.update', $cli->idcl)}}" method="Post" enctype="multipart/form-data">
                        @method('Patch')
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                            <div class="row">

                                <div class="col">
                                    <label>Apellido Paterno: </label><br>
                                    <input  type="text" name="app" placeholder="Ap. paterno" value="{{$usu->app}}" class="form-control">
                                    {!! $errors->first('app', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Apellido Materno: </label>
                                    <input type="text" name="apm" placeholder="Ap. Materno" value="{{$usu->apm}}" class="form-control">
                                    {!! $errors->first('apm', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Telefono: </label>
                            <input type="text" name="telefono" placeholder="Telefono" value="{{$usu->telefono}}" class="form-control" minlength="10" maxlength="10">
                            {!! $errors->first('telefono', '<br><small class="text-danger"">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <label>Municipio:</label>
                                <select name="idm" class="form-control">
                                <option>--Seleccione un Municipio--</option>
                                @foreach($municipio as $mun)
                                <option @if ($mun->idm===$cli->idm)
                                    selected="selected"
                                    @endif value="{{$mun->idm}}">{{$mun->nombre}}</option>
                                @endforeach
                                </select>
                                {!! $errors->first('idm', '<small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Colonia: </label>
                                    <input type="text" name="colonia" placeholder="Colonia" value="{{$cli->colonia}}" class="form-control">
                                    {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Calle: </label>
                                    <input type="text" name="calle" placeholder="Calle" value="{{$cli->calle}}" class="form-control">
                                    {!! $errors->first('calle', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Numero interior: </label>
                                    <input type="text" name="numint" placeholder="Num. interior" value="{{$cli->numint}}" class="form-control">
                                    {!! $errors->first('numint', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Numero exterior: </label>
                                    <input type="text" name="numext" placeholder="Num. exterior" value="{{$cli->numext}}" class="form-control">
                                    {!! $errors->first('colonia', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                                <div class="col">
                                    <label>Codigo Postal: </label>
                                    <input type="text" name="cp" placeholder="C.P" value="{{$cli->cp}}" class="form-control" minlength="5" maxlength="5">
                                    {!! $errors->first('cp', '<br><small class="text-danger"">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Imagen del cliente: </label>
                            <input type="file" name="img" placeholder="Imagen" value="{{$cli->img}}"  onchange="preview(this)">
                            <br>
                            <img src="/logos/{{$cli->img}}" width="100px" id="img" alt="">
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

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

