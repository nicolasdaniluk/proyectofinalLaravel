<footer>
  <ul>
    <li><a href="{{route('faq')}}">FAQ |</a></li>
    @php
      $user = Auth::user();
    @endphp
   @if (!$user)
    <li><a href="{{route('register')}}">Crear cuenta |</a></li>
    <li><a href="{{route('login')}}">Iniciar sesión |</a></li>
  @endif
    <li><a href="{{route('producto.listar')}}">Productos |</a></li>
    <li><a href="{{route('producto.categorias')}}">Categorias |</a></li>
  @if ($user)
    @if ($user->tipo_usuario==2 ||$user->tipo_usuario==3 )
      <li><a href="{{route('usuario.listar')}}">Lista de Usuarios |</a></li>
      <li><a href="{{route('usuario.rangos')}}">Lista por Rangos |</a></li>
    @endif
  @endif
    <li><a class="btn btn-sm btn-outline-secondary" name="boton">Cambiar Estilo de pagina </a></li>
  </ul>
  <ul class="redesfoot">
    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-tumblr-square"></a></i></li>
  </ul>
</footer>
