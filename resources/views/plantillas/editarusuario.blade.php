<div class="modal fade" id="editarModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title">Editar Perfil</h4>
      </div>
      <form role="form"  id="editarform" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="alert alert-danger" role="alert" id="edit_user_validator" style="display:none"></div>
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="text" class="form-control" name="name" value={{ Auth::user()->name }} placeholder="Ingresa tu nombre" autocomplete="off">  
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="email" class="form-control" name="email" value={{ Auth::user()->email }} placeholder="Ingresa tu correo electrónico" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Repite tu contraseña</label>
            <input type="password" class="form-control" name="contraseña_confirmation" id="exampleInputPassword1" placeholder="Repite la contraseña">
          </div>

          <div class="form-group">
            <input type="file" name="foto_perfil" class="dropify" data-default-file="{{ asset( 'storage/img/' ) }}/{{ Auth::user()->photo }}" />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>	  
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- /.modal -->