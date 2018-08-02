@extends('plantillas.primera')

@section('contenido')


      <div class="caja">
        <div class="formulario">
          <form method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Crear cuenta</legend>
                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label class="campo">Nombre:</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label class="campo">Email:</label>
                    <input class="form-control" type="text" name="email" value="">
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group" >
                    <label class="campo">Contraseña:</label>
                    <input class="form-control" type="password" name="pass" value="">
                  </div>
                  </div>
                  <div class="col-sm-6">
                   <div class="form-group" >
                    <label class="campo">Repetir Contraseña:</label>
                    <input class="form-control" type="password" name="rpass" value="">
                   </div>
                  </div>
                </div>
                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="name" class="campo">Imagen:</label>
                      <input class="form-control" type="file" name="avatar" value="">
                    </div>
                  </div>
                  <p>
                    <button type="submit">¡Crear cuenta!</button>
                    <br><br>
                    <label class="campo"><a href="login.php">¡Ya tengo cuenta!</a></label>
                  </p>
            </fieldset>
          </form>
        </div>
      </div>

@endsection
