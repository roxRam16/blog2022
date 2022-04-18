<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="{{request()->routeIs('home.index') ? 'bg-light' : ''}} nav-link" href="{{route('home.index')}}">Inicio</a>
          <!--@ dump(request()->routeIs('home.index'))-->
        </li>
        <li class="nav-item">
          <a class="{{request()->routeIs('cursos.*') ? 'bg-light' : ''}} nav-link" href="{{route('cursos.index')}}">Cursos</a>
         <!--@ dump(request()->routeIs('cursos.index'))-->
        </li>
        <li class="nav-item">
          <a class="{{request()->routeIs('nosotros') ? 'bg-light' : ''}} nav-link" href="{{route('nosotros')}}">Nosotros</a>
          <!--@ dump(request()->routeIs('nosotros'))-->
        </li>

        <li class="nav-item">
            <a class="{{request()->routeIs('contactanos.index') ? 'bg-light' : ''}} nav-link" href="{{route('contactanos.index')}}">Contáctanos</a>
            <!--@ dump(request()->routeIs('nosotros'))-->
        </li>

        <li class="nav-item">
            <a class="{{request()->routeIs('enviarEmail') ? 'bg-light' : ''}} nav-link" href="{{route('enviarEmail')}}">Enviar email</a>
            <!--@ dump(request()->routeIs('nosotros'))-->
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
</nav>