<!-- Modal -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="titulos modal-title"></h3>
        </center>
        <center><i class="fa fa-user-circle create-user-icon "></i></center>
        <hr />
        <h3 class="subtitulos text-center">INICIAR SESIÓN</strong></h3>
        <br />
        @if(session('alert'))
        {{session('alert')}}
        @endif
        <div class="container">

          <center>
          <form method="POST" action="{{route('iniciar_sesion')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-4">
                <label for="fname">Usuario:</label><br>
              </div>
              <div class="col-8">
                <input type="email" id="fname" name="correo"><br>
              </div>
              <div class="col-4">
                <label for="fname">Contraseña:</label><br>
              </div>
              <div class="col-8">
                <input type="password" id="fname" name="pswd"><br>
              </div>
            
          </div>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
          </div>
          </form>  
        </center>
        <br>
      

          
          

        </div>
      </div>
    </div>
  </div>
</div>
