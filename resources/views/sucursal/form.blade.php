<div class="form-row">
    
    <div class="form-group col-md-4">
        <label for="inputState">Nit de la Empresa</label>
        <select name="empresa_id" id="empresa_id" class="form-control">
            @foreach($empresa as $emp)
            <option value="{{$emp->id}}">{{$emp->nombre}} </option>
            @endforeach
        </select>

    </div>
    <div class="form-group col-md-8">
        <label for="inputEmail4">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>
    <div class="form-group col-md-4">
        <label for="inputEmail4">Telefono</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
    </div>
    <div class="form-group col-md-4">
        <label for="inputState">Lugar</label>
        <select name="lugar_id" id="lugar_id" class="form-control">
            @foreach($lugar as $lug)
            <option value="{{$lug->id}}">{{$lug->ciudad}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="inputState">Tipo</label>
        <select name="tipo_sede_sucur" id="tipo_sede_sucur" class="form-control">
            
            <option value="0">Sede</option>
            <option value="1">Sucursal</option>
            
        </select>
    </div>

</div>
<div class="form-row"> 
    <button type="submit" class="btn btn-outline-info col-md-4">{{$modo}}</button>
</div>
