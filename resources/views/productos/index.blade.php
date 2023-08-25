@extends('layouts.plantilla');

@section('contenido')
    <a href="productos/create" class="btn btn.primary">CREAR</a>

    <table class="table table-dark table-striped mt-4"></table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->ID}}</td>
                <td>{{$producto->Codigo}}</td>
                <td>{{$producto->Descripcion}}</td>
                <td>{{$producto->Precio}}</td>
                <td>{{$producto->Acciones}}</td>
                <td>
                    <a href="#" class="btn btn-info">Editar</a>
                    <button href="#" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection