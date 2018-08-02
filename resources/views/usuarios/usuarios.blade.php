@extends('plantillas.primera')

@section('contenido')
 <section>
  @php
    $user = Auth::user();
  @endphp

 <br>
 <br>
    <h1 style="margin:2% 0% 5% 45%;">Usuarios</h1>

    <ul style="text-align:center; list-style-type: none;">
      @foreach ($listado as $usuario)
        <li style="margin-bottom:2%;" >
          <span style=""><img style="width:5%;" src="{{Storage::url($usuario->avatar)}}" alt="{{$usuario->nombre}}" ></span>
          <span style="margin-right:5%; width:20%;"><a href="{{route('usuario.perfil', [ 'id' => $usuario->id ])}}">{{$usuario->nombre}}</a></span>

          @if ($user)
            @if ($user->tipo_usuario==2 ||$user->tipo_usuario==3 )

              <a href="{{route('usuario.editar', [ 'id' => $usuario->id ])}}"><span class="fas fa-pencil-alt"></span></a>
              <a href="{{route('usuario.borrar', [ 'id' => $usuario->id ])}}"><span class="fas fa-trash-alt"></span></a>
              </li>
            @endif
          @endif
      @endforeach
    </ul>
    <br>
    {{ $listado->links() }}
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
