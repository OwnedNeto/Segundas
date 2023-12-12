
  <!-- editar -->
  <div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EditarCategoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.update', $categoria->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"class="form-control"name="nombre"id=""aria-describedby="helpId"placeholder="" value="{{$categoria->nombre}}"/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripccion</label>
            <input type="text"class="form-control"name="descripccion"id=""aria-describedby="helpId"placeholder="" value="{{$categoria->descripccion}}"/>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>





  
  <!-- editar -->
  <div class="modal fade" id="delete{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EditarCategoria</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('categorias.destroy', $categoria->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">

            Estas seguro de eliminar a <strong>{{$categoria->nombre}}</strong>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>