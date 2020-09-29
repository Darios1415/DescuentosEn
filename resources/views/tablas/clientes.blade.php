@extends('layouts/admin')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Clientes</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table id="clientes" class="table table-bordered table-hover">
                <a href="{{route('clientes.create')}}">
                    <img src="/icons/agregar-archivo.png" alt="" height="40px">
                </a>
                <thead>
                    <tr>
                        <td>Imagen</td>
                        <td>Nombre</td>
                        <td>Apellido Paterno</td>
                        <td>Apellido Materno</td>
                        <td>Correo</td>
                        <td>Contraseña</td>
                        <td>Telefono</td>
                        <td>Municipio</td>
                        <td>Colonia</td>
                        <td>Calle</td>
                        <td>Num. interior</td>
                        <td>Num. exterior</td>
                        <td>C.P</td>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente as $item)
                    <tr>
                        <td><img src="/logos/cliente/{{$item->img}}" width="100px" alt=""></td>
                        <td>{{$item->usuario->nombre}}</td>
                        <td>{{$item->usuario->app}}</td>
                        <td>{{$item->usuario->apm}}</td>
                        <td>{{$item->usuario->email}}</td>
                        <td>{{$item->usuario->pass}}</td>
                        <td>{{$item->usuario->telefono}}</td>
                        <td>{{$item->municipio->nombre}}</td>
                        <td>{{$item->colonia}}</td>
                        <td>{{$item->calle}}</td>
                        <td>{{$item->numint}}</td>
                        <td>{{$item->numext}}</td>
                        <td>{{$item->cp}}</td>
                        <td class="col-md-1">
                            <a href="{{route('clientes.edit', $item->idcl)}}">
                                <img src="/icons/editar.png" alt="" height="40px">
                            </a>
                            <form method="POST" action="{{route('clientes.destroy', $item->idcl, $item->idu)}}" class="formulario-eliminar">
                                @method('DELETE')
                                {{csrf_field()}}
                            <button style="border: 0;"> <img src="/icons/eliminar.png" alt="" height="40px"></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>

</section>

<script src="/plugins/jquery/jquery.min.js"></script>

<script>
    $(function () {
      $('#clientes').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
      });
    });
  </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if (session('success') =='ok')
<script>
    Swal.fire({
    position: '',
    icon: 'success',
    title: 'Cliente registrado',
    showConfirmButton: false,
    timer: 1500
    })
</script>
@endif
@if (session('success') =='edit')
<script>
    Swal.fire({
    position: '',
    icon: 'success',
    title: 'cliente Editado',
    showConfirmButton: false,
    timer: 1500
    })
</script>
@endif

<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

            Swal.fire({
            title: '¿Desea eliminar este Cliente?',
            text: "¡Este cliente se eliminara definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡si, eliminar!',
            cancelButtonText: '¡Cancelar!',
            }).then((result) => {
            if (result.value) {
                this.submit();
            }
            })

    })

</script>

@if (session('success') =='delete')
<script>
       Swal.fire(
            'Cliente Eliminado!',
            'El cliente se elimino con exito.',
            'success'
       )
</script>
@endif

@endsection
