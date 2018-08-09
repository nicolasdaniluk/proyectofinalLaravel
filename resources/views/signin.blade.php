@extends('plantillas.primera')

@section('contenido')


      <div class="caja">
        <div class="formulario">
          <form method="POST" enctype="multipart/form-data" id="register">
            <fieldset>
                <legend>Crear cuenta</legend>
                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label class="campo">Nombre:</label>
                    <input type="text" class="form-control" name="firstname" value="">
                    <div class=""> </div>
                  </div>
                </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label class="campo">Email:</label>
                    <input class="form-control" type="text" name="email" value="">
                    <div class=""> </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group" >
                    <label class="campo">Contraseña:</label>
                    <input class="form-control" type="password" name="pass" value="">
                    <div class="invalid-feedback"> </div>
                  </div>
                  </div>
                  <div class="col-sm-6">
                   <div class="form-group" >
                    <label class="campo">Repetir Contraseña:</label>
                    <input class="form-control" type="password" name="cpass" value="">
                    <div class=""> </div>
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
                  </p>
            </fieldset>
          </form>
        </div>
      </div>
      <script  src="/js/signVal.js"></script>
@endsection
