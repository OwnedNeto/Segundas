@extends('welcome')
@section('content')

<!-- Button trigger modal -->
<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo
  </button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-danger text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
        
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;
            @endphp
            @foreach($productos as $producto)    
            <tr class="">
                <td scope="row">{{$i++}}</td>
                <td>{{$producto->Categoria->nombre}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                        Editar
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                        Eliminar
                      </button>
                </td>
            </tr>
            @include('producto.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('producto.create')

    
@endsection