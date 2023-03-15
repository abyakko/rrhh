<a class="btn btn-primary edit" data-toggle="modal" data-target="#editModal{{$emp->id}}" href="{{route('empresa.edit', $emp)}}"><i class="fa fa-pen"></i></a>


  <div class="modal fade" id="editModal{{$emp->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">ACTUALIZAR EMPRESA</h4>    
            </div>
            <div class="modal-body">
            {!! Form::model($emp,['route'=> ['empresa.update', $emp], 'method'=>'put', 'class'=>'editar']) !!}
            <div class="form-group">
                {!! Form::label('nit', 'Nit Empresa')!!}
                {!! Form::text('empresa_id', null, ['class'=> 'form-control', 'required','disabled']) !!}

                {!! Form::label('nombre', 'Nombre')!!}
                {!! Form::text('nombre', null, ['class'=> 'form-control', 'required','disabled']) !!}

                {!! Form::label('propietario', 'Propietario')!!}
                {!! Form::text('propietario', null, ['class'=> 'form-control', 'required','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}

                {!! Form::label('celular', 'Celular ')!!}
                {!! Form::number('celular', null, ['class'=> 'form-control', 'required']) !!}

            
                {!! Form::label('descripcion', 'Direccion')!!}
                {!! Form::text('descripcion', null, ['class'=> 'form-control', 'required','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}

                {!! Form::label('correo', 'Correo')!!}
                {!! Form::email('correo', null, ['class'=> 'form-control', 'required']) !!}

                {!! Form::label('descripcion', 'Descripcion')!!}
                {!! Form::text('descripcion', null, ['class'=> 'form-control', 'required','onKeyUp'=>'document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()']) !!}
            
            
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {!! Form::submit('Actualizar Empresa', ['class'=> 'btn btn-primary', 'id'=>'actualizar']) !!}
        </div>
        {!! Form::close() !!}
       </div>
                          

    </div>
</div>
</div>
