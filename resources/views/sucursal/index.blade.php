@extends('adminlte::page')


@section('content')
<br />
<div class="card">

    <div class="card bg-dark">
        <table width=100%>
            <tr>
                <td align="left" width=5%>
                    <h2><i class="fas fa"></i></h2>
                </td>
                <td align="center">
                    <h2> LISTA DE SUCURSALES </h2>
                </td>
            </tr>
        </table>
    </div>


    <div class="card-body">
        @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        @include('sucursal.create')

        <br/>
        <br/>
        <table class="table table-striped" id="sucursal">
            <thead>
                <tr>
                    <th>NIT</th>
                    <th>Lugar</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach($sucursal as $sucur)
                <tr>
                    <td>{{ $sucur->empresa->empresa_id}}</td>
                    <td>{{ $sucur->lugar->ciudad}}</td>
                    <td>{{ $sucur->direccion}}</td>
                    <td>{{ $sucur->telefono}}</td>
                    @if ($sucur->tipo_sede_sucur == 0)
                    <td>Sede</td>
                    @else
                    <td>Sucursal</td>
                    @endif
                    
                    <td>
                        <a class="btn btn-warning" href="{{ url('/sucursals/'.$sucur->empresa_id.'/edit') }}" >
                            Editar
                        </a>
                        <form action="{{ url('/sucursals/'.$sucur->id) }}" class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
<style>
    .sidebar-dark-primary {
        background: #052530 !important;
    }    
</style>


@endsection

@section('js')

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#sucursal').DataTable({
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar " +
                `<select class="custom-selec custom-select-sm form-control form-control-sm">
                                        <option value = '10'>10</option>
                                        <option value = '25'>25</option>
                                        <option value = '50'>50</option>
                                        <option value = '100'>100</option>
                                        <option value = '-1'>Todos</option>
                                    </select>` +
                " registros por pagina",
            "zeroRecords": "Nada encontrado - Disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });
</script>
@endsection