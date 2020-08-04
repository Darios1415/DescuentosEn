
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
                        <td>Categoria</td>
                        <td>Subcategoria</td>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategoria as $item)
                    <tr>
                        <td>{{$item->categoria->nombre}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                            <a href="{{route('subcategorias.edit', $item->idsc)}}">
                                <img src="/icons/editar.png" alt="" height="40px">
                            </a>
                            <hr>
                            <form method="POST" action="{{route('subcategorias.destroy', $item->idsc)}}">
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

@endsection


