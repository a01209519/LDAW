<!-- Modal -->
<div class="modal fade" id="ModalTitulo" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="titulos modal-title"></h3>
        </center>
        <center><i class="fa fa-user-circle create-user-icon "></i></center>
        <hr />
        <h3 class="subtitulos text-center">Registrar Titulo</strong></h3>
        <br />
        <div class="container">

          <center>
          <form method="POST" action="{{route('titulos.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-4">
                <label for="fname">Nombre:</label><br>
              </div>
              <div class="col-8">
                <input type="text" id="fname" name="nombre" required="true"><br>
              </div>
              <div class="col-4">
                <label for="fname">Versión:</label><br>
              </div>
              <div class="col-8">
                <input type="text" id="fname" name="vers" required="true"><br>
              </div>
              <div class="col-4">
                <label for="fname">Descripción:</label><br>
              </div>
              <div class="col-8">
                <input type="text" id="fname" name="des" required="true"><br>
              </div>

              <div class="col-4">
                <label for="fname">Imagen:</label><br>
              </div>
              <div class="col-8">
                
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
                  <label class="custom-file-label" for="inputGroupFile01"></label>
                </div>
              </div>
            
          </div>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
          </form>  
        </center>
        <br>
      

          
          

        </div>
      </div>
    </div>
  </div>
</div>