<a class="btn btn-outline-info" data-toggle="modal" data-target="#editModal{{ $sucursal->id }}"
    href="{{ route('sucursal.edit', $sucursal) }}"><i class="fa fa-pen"> Editar</i></a>

    <div class="modal fade" id="editModal{{ $sucursal->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <!-- Modal -->
    <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">ACTUALIZAR PRODUCTO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            
            {!! Form::model($sucursal, [
                'route' => ['sucursal.update', $sucursal],
                'method' => 'put',
            ]) !!}

            {!! Form::label('empresa_id', 'NIT EMPRESA') !!}
            {!! Form::text('empresa_id', null, ['class' => 'form-control', 'required']) !!}
            {!! Form::label('lugar', 'LUGAR') !!}
            {!! Form::text('lugar', null, ['class' => 'form-control', 'required']) !!}
            {!! Form::label('direccion', 'DIRECCION') !!}
            {!! Form::text('direccion', null, ['class' => 'form-control', 'required']) !!}
            {!! Form::label('telefono', 'TELEFONO') !!}
            {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {!! Form::submit('Actualizar Sucursal', ['class' => 'btn btn-primary', 'id' => 'actualizar']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
@section('css')

<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection