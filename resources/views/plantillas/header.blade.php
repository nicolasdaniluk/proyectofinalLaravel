<?php
 ?>
<nav>
  <div class="logo">
    <a href="/">
      <img src="{{\Storage::url('img/logo-2.png')}}" alt="">
    </a>
  </div>
  <div class="menu">

    <label for="menu-icon" class="menu-icon">
      <i class="fas fa-bars"></i>
    </label>
    <input type="checkbox" id="menu-icon">

    <ul>
      <!--
      <li><a href="{{route('producto.listar')}}">Productos</a></li>
      <li><a href="{{route('producto.categorias')}}">Categorias</a></li>
      -->

      <li><a href="{{route('faq')}}">FAQ</a></li>
        <li>|</li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                </li>
                  <li>|</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
            @else
                <li class="nav-item dropdown">

                  <!--
                  <img id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="width:30px;" src="{{\Storage::url(Auth::user()->avatar)}}" alt="">
                  -->

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nombre }} <span class="caret"></span>
                    </a>
                    @php
                      $user = Auth::user();
                    @endphp
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('usuario.perfil', [ 'id' => $user->id ])}}">Mi perfil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">Cerrar sesion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

    </ul>
  </div>
</nav>
