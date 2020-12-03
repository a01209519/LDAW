<!-- Modal -->
<div class="modal fade" id="ModalR" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="titulos modal-title"></h3>
        </center>
        <center><i class="fa fa-user-circle create-user-icon "></i></center>
        <hr />
        <h3 class="subtitulos text-center">Registrarse</strong></h3>
        <br />
        @if(session('alert'))
        {{session('alert')}}
        @endif
        <div class="container">

          <center>
          <form method="POST" action="{{route('registrar_ususario')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-4">
                <label for="name">Nombre:</label><br>
              </div>
              <div class="col-8">
                <input type="text" id="name" name="nombre"><br>
              </div>
              <div class="col-4">
                <label for="femail">Correo:</label><br>
              </div>
              <div class="col-8">
                <input type="email" id="femail" name="correo"><br>
              </div>
              <div class="col-4">
                <label for="phone">Teléfono:</label><br>
              </div>
              <div class="col-8">
                <input type="phone" id="phone" name="telefono"><br>
              </div>
              <div class="col-4">
                <label for="passw">Contraseña:</label><br>
              </div>
              <div class="col-8">
                <input type="password" id="passw" name="password"><br>
              </div>
            
          </div>
          <br>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-success">Registar Usuario</button>
          </div>
          </form>  
        </center>
        <br>
      

          
          

        </div>
      </div>
    </div>
  </div>
</div>
