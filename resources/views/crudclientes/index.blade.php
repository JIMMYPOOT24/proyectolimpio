@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tabla de los clientes</h1>
<br>
<a href="{{ url('dashboard/datoscliente/create')}}"><button class="btn btn-success">Agregar</button></a>
@stop
@section('content')
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre-cliente</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cliente->url_imagen}}</td>
            <td>{{$cliente->nombre_cliente}}</td>
            <td>{{$cliente->descripcion}}</td>
            <td>
                <a href="{{url('dashboard/datoscliente/'. $cliente->id.'/edit')}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('/dashboard/datoscliente/'. $cliente->id)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-sm btn-secondary"
                        onclick="return confirm('¿Borrar?');">Borrar</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{url('dashboard/datosempresa/')}}"><button class="btn btn-secondary">Regresar</button></a>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop