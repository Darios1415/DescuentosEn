@extends('layouts/admin')
@section('content')
<section class="content">
    <!-- subcategoria -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categorias</h3>
        </div>
        <div class="card-body">
            <table id="categorias" class="table table-bordered table-hover">
                    <a href="{{route('categorias.create')}}">
                        <img src="/icons/agregar-archivo.png" alt="" height="40px">
                    </a>
                <thead>
                    <tr>
                        <td>Categoria</td>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoria as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{route('categorias.edit', $item->idc)}}">
                                <img src="/icons/editar.png" alt="" height="40px">
                            </a>
                            <hr>
                            <form method="POST" action="{{route('categorias.destroy', $item->idc)}}">
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
      $('#categorias').DataTable({
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




@endsection


