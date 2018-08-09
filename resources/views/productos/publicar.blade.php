@extends('plantillas.primera')

@section('contenido')

  <div class="caja">
    <div class="formulario">
      <form method="POST" enctype="multipart/form-data" action="/productos/agregar" id="publish">
        {{ csrf_field() }}
        <fieldset>
            <legend>Producto</legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                  @if ($errors->has('nombre'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                  @endif
                  <div class=""> </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">descripcion:</label>
                  <input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}">
                  @if ($errors->has('descripcion'))
                    <span class="text-danger">{{$errors->first('descripcion')}}</span>
                  @endif
                  <div class=""> </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group" >
                  <label class="campo">precio:</label>
                  <input class="form-control" type="text" name="precio" value="{{old('precio')}}">
                  @if ($errors->has('precio'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                  @endif
                  <div class=""> </div>
                </div>
              </div>
              <div class="col-sm-6">
               <div class="form-group" >
                <label class="campo">categoria:</label>
                <select class="form-control" name="categoria">
                  <option value="{{old('categoria_id')}}">Seleccione categoria</option>
                  @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
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
                  <label for="imagen" class="campo">Imagen:</label>
                  <input class="form-control" type="file" name="imagen" value="{{old('imagen')}}">
                </div>
                @if ($errors->has('image'))
                  <span class="text-danger">{{$errors->first('image')}}</span>
                @endif
                <div class=""> </div>
              </div>
              <p>
                <button type="submit">Publicar producto</button>
                <br><br>
              </p>
        </fieldset>
      </form>
    </div>
  </div>

@endsection
