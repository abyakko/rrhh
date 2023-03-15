
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('empresa', 'Empresa') !!}
        <select name="estado" id="empresa" class="form-control">
            @foreach ($empresa as $empr)
            <option value="0">{{$empr->nombre}}</option>    
            @endforeach
        </select>
    </div> 
    <div class="form-group col-md-6">
        {!! Form::label('empresa', 'Nro. Folio') !!}
        <select name="estado" id="empresa" class="form-control">
            @foreach ($convenio as $conve)
            <option value="0">{{$conve->folio}}</option>    
            @endforeach
        </select>
    </div> 
</div>
<div class="form-row"> 
    <div class="form-group col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4">{{$modo2}}</button>
        <button type="button" class="btn btn-secondary col-md-4" data-dismiss="modal">Cerrar</button>
    </div>
</div>