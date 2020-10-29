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
      <li class="nav-item">

        <button
              data-toggle="modal" 
              data-target="#ModalLogin"
              type="button" 
              class="btn subtitulos btn-md btn-default">
                <i class="fa fa-user-circle nav-user"></i>
        </button>

      </li>
    </ul>
  </div>
</nav>


  <x-modalLogin/>