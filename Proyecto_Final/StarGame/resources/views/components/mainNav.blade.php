<nav class="navbar navbar-expand-sm main-navbar">
  <!-- this button is for mobile devices -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item nav-element">
       <x-searchBar :titulo="'Buscar Videojuego'" :ejemplo="'FIFA 20'" />
     </li>
      <!-- BIblioteca -->
      <li class="nav-item nav-element">
        <a class="nav-link subtitulos" href="{{ url('/biblioteca') }}">Biblioteca</a>
      </li>

        <!-- Comunidad -->
      <li class="nav-item nav-element">
        <a class="nav-link subtitulos" href="{{ url('/comunidad') }}">Comunidad</a>
      </li>

      
      <li class="nav-item nav-element">
      </li>
      <li class="nav-item nav-element">
      </li>

    </ul>
  </div>
</nav>