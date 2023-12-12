@extends('welcome')
@section('content')

<!-- Button trigger modal -->
<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Agregar
  </button>

<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-danger text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($categorias as $categoria)    
            <tr class="">
                <td scope="row">{{$i++}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripccion}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                        Editar
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                        Eliminar
                      </button>
                </td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
            @include('categoria.info')

            @endforeach
        </tbody>
    </table>
</div>
@include('categoria.create')

    
@endsection