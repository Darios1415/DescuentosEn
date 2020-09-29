
@extends('layouts/admin')
@section('content')

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Productos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
            <table id="productos" class="table table-bordered table-hover">
                <a href="{{route('productos.create')}}">
                    <img src="/icons/agregar-archivo.png" alt="" height="40px">
                </a>
            <thead>
                <tr>
                    <td>Imagen</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td>Comision</td>
                    <td>Existencia</td>
                    <td>Descuento al cliente</td>
                    <td>Descuento al proveedor</td>
                    <td>Costo de Envio</td>
                    <td>Categoria</td>
                    <td>Subcategoria</td>
                    <td>Accion</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $item)
                <tr>
                    <td><img src="/logos/producto/{{$item->img}}" width="100px" alt=""></td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->comision}}</td>
                    <td>{{$item->existencia}}</td>
                    <td>{{$item->descc}}</td>
                    <td>{{$item->descp}}</td>
                    <td>{{$item->cost_env}}</td>
                    <td>{{$item->categoria->nombre}}</td>
                    <td>{{$item->subcategoria->nombre}}</td>
                    <td class="col-md-1">
                        <a href="{{route('productos.edit', $item->idpr)}}">
                            <img src="/icons/editar.png" alt="" height="40px">
                        </a>
                        <hr>
                        <form method="POST" action="{{route('productos.destroy', $item->idpr)}}" class="formulario-eliminar">
                            @method('DELETE')
                            {{csrf_field()}}
                        <BUtton style="border: 0;"> <img src="/icons/eliminar.png" alt="" height="40px"></BUtton>
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
        $('#productos').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
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
    title: 'producto registrado',
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
    title: 'Producto Editado',
    showConfirmButton: false,
    timer: 1500
    })
</script>
@endif

<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

            Swal.fire({
            title: '¿Desea eliminar este Producto?',
            text: "¡Este producto se eliminara definitivamente!",
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
            'Producto Eliminado!',
            'El producto se elimino con exito.',
            'success'
       )
</script>
@endif

@endsection
