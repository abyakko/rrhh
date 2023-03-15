<div class="form-row">
    <div class="form-group col-md-4 offset-md-4">
     
        {!! Form::number('folio', null, ['id'=>'folio','name'=>'folio','class'=>'form-control','placeholder'=>'NRO. FOLIO']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('f_inicio', 'FECHA INICIO') !!}
        {!! Form::date('f_inicio', null, ['id'=>'f_inicio','name'=>'f_inicio','class'=>'form-control','placeholder'=>'FECHA DE INICIO']) !!}
    </div> 
    <div class="form-group col-md-6">
        {!! Form::label('f_fin', 'FECHA CADUCIDAD') !!}
        {!! Form::date('f_fin', null, ['id'=>'f_fin','name'=>'f_fin','class'=>'form-control','placeholder'=>'FECHA DE CADUCIDAD']) !!}
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-12">

        <select name="folio" id="folio" class="form-control" aria-labelledby="MODALIDAD">
            <option value="0">PUBLICIDAD BÁSICA</option>
            <option value="1">PUBLICIDAD POR INTERCAMBIO</option>
            <option value="2">PUBLICIDAD POR AFILIACIÓN</option>
            <option value="3">PAQUETES PUBLICITARIOS</option>
        </select>
    </div> 
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::text('prom_desc', null, ['id'=>'prom_desc','name'=>'prom_desc','class'=>'form-control','placeholder'=>'PROMOCION / DESCUENTO']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">

        {!! Form::text('observacion', null, ['id'=>'observacion','name'=>'observacion','class'=>'form-control','placeholder'=>'OBSERVACIÓN']) !!}
    </div>
</div>

<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>