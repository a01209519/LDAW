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
                <h6 class="dropdown-header">A01209043@itesm.mx</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mi Cuenta</a>
                <a class="dropdown-item" href="#">Mis Juegos</a>
                <div class="dropdown-divider"></div>

                <?php $account = 0 ?>
                <?php if ($account == 0){ ?>
                <div class="row justify-content-center">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Iniciar Sesión</button>
                </div>
                <?php } ?>

                 <?php if ($account == 1){ ?>
                <div class="row justify-content-center">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar Sesión</button>
                </div>
                <?php } ?>

            </div>
        </div>
      </li>
    </ul>
  </div>
</nav>

