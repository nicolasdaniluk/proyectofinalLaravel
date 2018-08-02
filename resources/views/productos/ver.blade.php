@extends('plantillas.primera')

@section('contenido')
 <section>
  <br>
  <br>
    <h3 style="margin:5% 45% 2% 42%;width:30%;">{{$producto->nombre}}</h3>

     @php
       $user = Auth::user();
     @endphp
    @if ($user)
      @if ($user->tipo_usuario==2 ||$user->tipo_usuario==3 )
               <ul style="text-align:center;    list-style-type: none;">
                    <li >
                      <a href="{{route('producto.editar', [ 'id' => $producto->id ])}}"><span class="fas fa-pencil-alt"></span></a>
                      <a href="{{route('producto.borrar', [ 'id' => $producto->id ])}}"><span class="fas fa-trash-alt"></span></a>
                    </li>
                </ul>
      @endif
    @endif
      <div style="text-align:center;"><img style="width:15%;" src="{{\Storage::url($producto->imagen)}}" alt="" ></div>
    <h4 style="text-align:center;">Categoria:   <a href=" {{route('producto.verCategoria', [ 'nombre' => $categoria->nombre ])}}">{{$categoria->nombre}}</a></h4>
    <h2 style="text-align:center;">Precio: ${{$producto->precio}}</h3>
    <p style="text-align: justify; margin:2% 0 0 25%;width:50%;">{{$producto->descripcion}}</p>



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
