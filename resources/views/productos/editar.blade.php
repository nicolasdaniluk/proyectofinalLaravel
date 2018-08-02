@extends('plantillas.primera')

@section('contenido')

  <div class="caja">
    <div class="formulario">
      <form method="POST" enctype="multipart/form-data" action="/productos/{{$producto->id}}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Editar</legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')??$producto->nombre}}">
                  @if ($errors->has('nombre'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">descripcion:</label>
                  <input class="form-control" type="text" name="descripcion" value="{{old('descripcion')??$producto->descripcion}}">
                  @if ($errors->has('descripcion'))
                    <span class="text-danger">{{$errors->first('descripcion')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group" >
                  <label class="campo">precio:</label>
                  <input class="form-control" type="text" name="precio" value="{{old('precio')??$producto->precio}}">
                  @if ($errors->has('precio'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
               <div class="form-group" >
                <label class="campo">categoria:</label>
                <select class="form-control" name="categoria">
                  <option value="{{old('categoria')}}">Seleccione categoria</option>
                  @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}"
                      @if ($categoria->id == $producto->categoria_id)
                        {{ "selected" }}
                      @endif
                    >{{$categoria->nombre}}</option>
                  @endforeach
                </select>
                @if ($errors->has('categoria'))
                  <span class="text-danger">{{$errors->first('categoria')}}</span>
                @endif
               </div>
              </div>
            </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="name" class="campo">Imagen:</label>
                  <span style=""><img style="width:20%;display:block; margin: 0 auto; margin-bottom:5%;" src="{{Storage::url($producto->imagen)}}" alt="{{$producto->imagen}}" ></span>
                  <input class="form-control" type="file" name="imagen" value="{{old('imagen')}}">
                </div>
                @if ($errors->has('image'))
                  <span class="text-danger">{{$errors->first('image')}}</span>
                @endif
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
