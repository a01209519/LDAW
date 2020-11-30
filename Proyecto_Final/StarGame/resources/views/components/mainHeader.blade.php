


<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand navLogo" href="#">
    <img class="logo" src="{{ url('img/logo/logo.png') }}" alt="Logo" style="width:80px;">
  </a>
  <a class="navbar-brand titulos" href="/" id="navbar-title">GTC Gaming</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    
      <div class="col-11">
      </div>
    <div class="navbar-nav">
      <li class="nav-item-account">

        <div class="dropdown">
            <button class="btn subtitulos btn-md btn-default" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle nav-user"></i></button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              @if(session('id'))
                <h6 class="dropdown-header">{{session('correo')}}</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mi Cuenta</a>
                <a class="dropdown-item" href="{{route('mis_juegos')}}">Mis Juegos</a>
                <a class="dropdown-item" href="#">Ofertas</a>
                @if(session('rol')==2)
                <a class="dropdown-item" href="{{route('sugerencias')}}">Sugerencias de Titulo</a>
                @endif
                <div class="dropdown-divider"></div>
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
    </div>
  </div>
  <x-modalLogin/>
</nav>

