@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="card bg-dark">
    <table width=100%>
        <tr>
            <td align="left" width=5%>
                <h2><i class="fas fa"></i></h2>
            </td>
            <td align="center">
                <h2> CLIENTES </h2>
            </td>
        </tr>
    </table>
</div>
    @include('cliente.create')
    <table id="cliente" class="table table-striped">
        <thead>
            <th>ID</th>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Correo</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($cliente as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->ci}}</td>
                    <td>{{$client->nombre}}</td>
                    <td>{{$client->paterno}} {{$client->materno}}</td>
                    <td>{{$client->celular}}</td>
                    <td>{{$client->correo}}</td>
                    <td>
                        @include('cliente.edit', [$client->id])
                        @include('cliente.show', [$client->id])
                        <form action="{{ url('clientes/' . $client->id) }}" class="d-inline " method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger eliminar" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>                 
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .input-form{
            border: cadetblue;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
