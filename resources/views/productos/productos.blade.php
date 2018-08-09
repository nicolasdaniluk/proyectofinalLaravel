@extends('plantillas.primera')

@section('contenido')
 <section>
  @php
    $user = Auth::user();
  @endphp
@if ($user)

     <a href="{{route('producto.agregar')}}" class=".btn-primary" style="text-align:center;">
       <h2>Publicar nuevo producto</h2>
     </a>
@endif
 <br>
 <br>
    <h1 style="margin:2% 0% 5% 45%;">Productos</h1>

    <ul style="text-align:center; list-style-type: none;">
      @foreach ($listado as $producto)
        <li style="margin-bottom:2%;" >
          <span style=""><img style="width:5%;" src="{{Storage::url($producto->imagen)}}" alt="{{$producto->nombre}}" ></span>
          <span style="margin-right:5%; width:20%;"><a href="{{route('producto.ver', [ 'id' => $producto->id ])}}">{{$producto->nombre}}</a></span>
          <span style="margin-right:20%; width:20%;">${{$producto->precio}}</span>

          @if ($user)
            @if ($producto->vendedor==$user->id || $user->tipo_usuario==2 ||$user->tipo_usuario==3 )

              <a href="{{route('producto.editar', [ 'id' => $producto->id ])}}"><span class="fas fa-pencil-alt"></span></a>
              <a href="{{route('producto.borrar', [ 'id' => $producto->id ])}}"><span class="fas fa-trash-alt"></span></a>
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
