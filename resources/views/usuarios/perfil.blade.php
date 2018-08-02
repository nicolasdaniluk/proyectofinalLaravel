@extends('plantillas.primera')

@section('contenido')

  <section>
   <br>
   <br>
     <h3 style="margin:5% 45% 2% 42%;width:30%;">{{$datos->nombre}}</h3>
       <div style="text-align:center;"><img style="width:15%;" src="{{\Storage::url($datos->avatar)}}" alt="foto de perfil" ></div>
     <h2 style="text-align:center;">Rango: {{$rango->nombre}}</h3>
     <h2 style="text-align:center;">Email: {{$datos->email}}</h3>

       <ul style="text-align:center;    list-style-type: none;">
            <li >
              <a href="{{route('usuario.editar', [ 'id' => $datos->id ])}}"><span class="fas fa-pencil-alt"></span></a>
              <a href="{{route('usuario.borrar', [ 'id' => $datos->id ])}}"><span class="fas fa-trash-alt"></span></a>
            </li>
        </ul>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
  </section>

@endsection
