<nav class="navbar navbar-expand-lg main-header">
  <a class="navbar-brand navLogo" href="#">
    <img class="logo" src="{{ url('img/logo/logo.png') }}" alt="Logo" style="width:80px;">
  </a>
  <a class="navbar-brand titulos" href="/" id="navbar-title">GTC Gaming</a>
  <!-- this button is for mobile devices -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <!-- SESIÓN -->
      <li class="nav-item-account">

        <div class="dropdown">
            <button class="btn subtitulos btn-md btn-default" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle nav-user"></i></button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              @if(session('id'))
                <h6 class="dropdown-header">{{session('correo')}}</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mi Cuenta</a>
                <a class="dropdown-item" href="{{route('mis_juegos')}}">Mis Juegos</a>
                <div class="dropdown-divider"></div>
                @if(session('rol')==2)
                <a class="dropdown-item" href="{{route('sugerencias')}}">Sugerencias de Titulo</a>
                <div class="dropdown-divider"></div>
                @endif

                <div class="row justify-content-center">
                  <a class="btn btn-danger btn-sm" href="{{route('cerrar_sesion')}}">Cerrar Sesión</a>
                </div>
                @endif

               @if(!session('id'))
                <div class="row justify-content-center">
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalLogin">Iniciar Sesión</button>
                </div>


                <div class="row justify-content-center">
                  <p align="center"> o </p>
                </div>
                <div class="row justify-content-center">
                  <button type="button" class="btn btn-primary btn-sm" href="#">Registrate</button>
                </div>
                @endif

                 

            </div>
        </div>
      </li>
    </ul>
  </div>
  <x-modalLogin/>
</nav>

