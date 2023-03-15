<div class="form-row">
    <div class="form-group col-md-2">
        {!! Form::label('nit', 'NIT') !!}
        {!! Form::text('nit', null, ['id'=>'empresa_id','name'=>'empresa_id','class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('celular', 'Celular') !!}
        {!! Form::number('celular', null, ['id'=>'celular','name'=>'celular','class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('correo', 'Correo') !!}
        {!! Form::email('correo', null, ['id'=>'correo','name'=>'correo','class'=>'form-control', 'required' ]) !!}
    </div> 
</div>
<div class="form-row">
    <div class="form-group col-md-8">
        {!! Form::label('nombre', 'Nombre de la Empresa') !!}
        {!! Form::text('nombre', null, ['id'=>'nombre','name'=>'nombre','class'=>'form-control', 'required' ]) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('propietario', 'Propietario (Apellidos y Nombres)') !!}
        {!! Form::text('propietario', null, ['id'=>'propietario','name'=>'propietario','class'=>'form-control', 'required']) !!}
    </div>   
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', null, ['id'=>'descripcion','name'=>'descripcion','class'=>'form-control', 'required']) !!}
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>

