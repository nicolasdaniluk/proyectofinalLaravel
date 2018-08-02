@extends('plantillas.primera')

@section('contenido')
 <section>

 <br>
 <br>
    <h1 style="margin:2% 0% 5% 45%;">Rangos:</h1>

    <ul style="text-align:center;
    list-style-type: none;">
      @foreach ($rangos as $rango)
        <li style="margin-bottom:2%;" >
          <span style="margin-right:20%; width:20%;"><a href=" {{route('usuario.listaRango', [ 'nombre' => $rango->nombre ])}}">{{$rango->nombre}}</a></span>
        </li>
      @endforeach
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
 </section>
@endsection
