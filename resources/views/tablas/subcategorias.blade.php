
@extends('layouts/admin')

@section('content')

<section class="content">
    <!-- subcategoria -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Subcategorias</h3>
        </div>
        <div class="card-body">
            <table id="subcategorias" class="table table-bordered table-hover">
                    <a href="{{route('subcategorias.create')}}">
                        <img src="/icons/agregar-archivo.png" alt="" height="40px">
                    </a>
                <thead>
                    <tr>
                        <td>Imagen</td>
                        <td>Categoria</td>
                        <td>Subcategoria</td>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategoria as $item)
                    <tr>
                        <td><img src="/logos/subcategoria/{{$item->ruta}}" width="100px" alt=""></td>
                        <td>{{$item->categoria->nombre}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{route('subcategorias.edit', $item->idsc)}}">
                                <img src="/icons/editar.png" alt="" height="40px">
                            </a>
                            <hr>
                            <form method="POST" action="{{route('subcategorias.destroy', $item->idsc)}}" class="formulario-eliminar">
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
</section>

<script src="/plugins/jquery/jquery.min.js"></script>

<script>
    $(function () {
      $('#subcategorias').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
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
    title: 'Subcategoria creada',
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
    title: 'SubCategoria Editada',
    showConfirmButton: false,
    timer: 1500
    })
</script>
@endif

<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

            Swal.fire({
            title: '¿Desea eliminar Subcategoria?',
            text: "¡Esta Subcategoria se eliminara definitivamente!",
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
            'Subcategoria Eliminada!',
            'La Subccategoria se elimino con exito.',
            'success'
       )
</script>
@endif
@endsection


