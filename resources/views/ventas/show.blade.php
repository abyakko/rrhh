<style>
    .letras{
        color: rgba(1)255, 245, 238;
        text-transform: uppercase;
        font-size: 13px;
        padding-left: -530px;
    }
</style>
<a class="btn btn-success" data-toggle="modal" data-target="#showModal{{$emp->id}}" href="{{route('empresa.show', $emp)}}"><i class="fa fa-eye"></i></a>
  
<div class="modal fade" id="showModal{{$emp->id}}"  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="align: center; background-color: "seashell>
                <h4 class="modal-title" id="staticBackdropLabel" style="text-align: center; font-size: 20px; color: orblack
                ;">DESCRIPCIÓN DE LA EMPRESA</h4>    
            </div>
            <div class="modal-body">
            {!! Form::model($emp,['route'=> ['empresa.show', $emp], 'method'=>'put', 'class'=>'show']) !!}
            <div class="form-group">
                <table class="table-responsive table-striped" >
                    <tr>
                        <td class="col-md-4">{!! Form::label('nombre', 'NIT')!!}</td>
                        <td class="col-md-4">{{ $emp->empresa_id }}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">{!! Form::label('nombre', 'Nombre de la Empresa')!!}</td>
                        <td class="col-md-4">{{ $emp->nombre }}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">{!! Form::label('propietario', 'Propietario')!!}</td>
                        <td class="col-md-4">{{ $emp->propietario }}</td> 
                    </tr>
                    <tr>
                        <td class="col-md-4">{!! Form::label('correo', 'Correo')!!}</td>
                        <td class="col-md-4">{{ $emp->correo }}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">{!! Form::label('celular', 'Celular')!!}</td>
                        <td class="col-md-4">{{ $emp->celular }}</td>
                    </tr>
                    <tr>
                        <td class="col-md-4">{!! Form::label('descripcion', 'Descripción')!!}</td>
                        <td class="col-md-4">{{ $emp->descripcion }}</td>
                    </tr>

                    <div style="display: none">
                        {{ $i = 0 }}
                    </div>
                    @foreach ($emp->sucursal as $suc)
                    <tr>
                            @if ($suc->tipo_sede_sucur == 0)
                                <td class="col-md-4" ><b>SEDE </b></td>
                                <td class="col-md-4">{{ $suc->direccion }}</td>
                               @else
                                <td class="col-md-4"><b>SUCURSAL {{$i=$i+1}} </b></td>
                                <td class="col-md-4">{{ $suc->direccion }}</td>
                            @endif
                    </tr>    
                    @endforeach

                    <div style="display: none">
                        {{ $i = 0 }}
                    </div>
                </table>

                    <div class="form-group">
                        <div class="modal-header" style="align: center; background-color: "seashell>
                            <h4 class="modal-title" id="staticBackdropLabel" style="text-align: center; font-size: 20px; color: orblack;">
                            CONVENIOS
                            </h4>    
                        </div>
                        <table id="detcompra" class="table table-striped">
                            <thead>
                                <th>Nro. FOLIO</th>
                                <th>FECHA DE INICIO</th>
                                <th>FECHA DE CADUCIDAD</th>
                                <th>MODALIDAD</th>
                                <th>ESTADO</th>
                            </thead>
                            <tbody align="center">

                                @foreach ($emp->Empresaconvenio as $con)
                                <tr>
                                    <td>{{ $con->folio }}</td>
                                    <td>{{ $con->f_inicio }}</td>
                                    <td>{{ $con->f_fin }}</td>
                                    
                                        
                                        @switch($con->modalidad)
                                        @case('0')
                                        <td>PUBLICIDAD BÁSICA</td>
                                        @break
        
                                        @case('1')
                                        <td>PUBLICIDAD POR INTERCAMBIO</td>                                
                                        @break
                                        @case('2')
                                        <td>PUBLICIDAD POR AFILIACIÓN</td>
                                        @break
        
                                        @case('3')
                                        <td>PAQUETES PUBLICITARIOS</td>                                
                                        @break
        
                                        @default
                                        <td></td>
                                        @endswitch
                                    
                                    <td>   
                                        @if ($con->estado == 0)
                                            <span class="badge badge-danger">Inactivo</span>                                       
                                        @else
                                            <span class="badge badge-info">Activo</span>                                   
                                        @endif                               
                                    </td>
                                </tr>    
                                @endforeach

                                
                            </tbody>
                    
                </table>
            </div>
        </div>  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            
        </div>
       </div>

    </div>
</div>




