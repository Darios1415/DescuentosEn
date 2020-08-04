
@extends('layouts/admin')

@section('content')

<section class="content">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Proveedores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="proveedores" class="table table-bordered table-hover">
            <a href="{{route('proveedores.create')}}">
                <img src="/icons/agregar-archivo.png" alt="" height="40px">
            </a>
            <thead>
                <tr>
                    <td>Logo</td>
                    <td>Marca</td>
                    <td>Nombre</td>
                    <td>Apellido paterno</td>
                    <td>Apellido materno</td>
                    <td>Telefono</td>
                    <td>Clabe</td>
                    <td>Colonia</td>
                    <td>Num. interior</td>
                    <td>Num. exterior</td>
                    <td>C.P</td>
                    <td>Municipio</td>
                    <td>Correo</td>
                    <td>Contraseña</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedor as $item)
                <tr>
                    <td><img src="/logos/{{$item->logo}}" width="40px" alt=""></td>
                    <td>{{$item->marca}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->app}}</td>
                    <td>{{$item->apm}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>{{$item->clabe}}</td>
                    <td>{{$item->colonia}}</td>
                    <td>{{$item->numint}}</td>
                    <td>{{$item->numext}}</td>
                    <td>{{$item->cp}}</td>
                    <td>{{$item->municipio->nombre}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->pass}}</td>
                    <td class="col-md-1">
                        <a href="{{route('proveedores.edit', $item->idpr)}}">
                            <img src="/icons/editar.png" alt="" height="40px">
                        </a>
                        <form method="POST" action="{{route('proveedores.destroy', $item->idpr, $item->idu)}}">
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
</section>

<script src="/plugins/jquery/jquery.min.js"></script>

<script>
    $(function () {
      $('#proveedores').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
      });
    });
  </script>

  <script src="/plugins/jquery/jquery.min.js"></script>

@endsection
