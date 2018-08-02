@extends('plantillas.primera')

@section('contenido')

  <div class="caja">
    <div class="formulario">
      <form method="POST" enctype="multipart/form-data" action="/usuarios/agregar">
        {{ csrf_field() }}
        <fieldset>
            <legend>Usuario</legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                  @if ($errors->has('nombre'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="campo">email:</label>
                  <input class="form-control" type="text" name="email" value="{{old('email')}}">
                  @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group" >
                  <label class="campo">contraseña:</label>
                  <input class="form-control" type="text" name="password" value="{{old('password')}}">
                  @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                  @endif
                </div>
              </div>
              <div class="col-sm-6">
               <div class="form-group" >
                <label class="campo">Rango(tipo de usuario):</label>
                <select class="form-control" name="rango">
                  <option value="{{old('tipo_usuario')}}">Seleccione rango</option>
                  @foreach ($rangos as $rango)
                    <option value="{{$rango->id}}">{{$rango->nombre}}</option>
                  @endforeach
                </select>
                @if ($errors->has('rango'))
                  <span class="text-danger">{{$errors->first('rango')}}</span>
                @endif
               </div>
              </div>
            </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="avatar" class="campo">avatar:</label>
                  <input class="form-control" type="file" name="avatar" value="{{old('avatar')}}">
                </div>
                @if ($errors->has('avatar'))
                  <span class="text-danger">{{$errors->first('avatar')}}</span>
                @endif
              </div>
              <p>
                <button type="submit">Agregar Usuario</button>
                <br><br>
              </p>
        </fieldset>
      </form>
    </div>
  </div>

@endsection
