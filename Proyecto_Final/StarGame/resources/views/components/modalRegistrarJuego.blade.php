<!-- Modal -->
<div class="modal fade" id="ModalRegistrarJuego" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <h3 class="titulos modal-title"></h3>
        </center>
        <center><i class="fa fa-user-circle create-user-icon "></i></center>
        <hr />
        <h3 class="subtitulos text-center">Registrar Videojuego</strong></h3>
        <br />
        <div class="container">

          <center>
          <form method="POST" action="{{route('guardar_mis_juegos')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-4">
                <label for="fname">Nombre:</label><br>
              </div>
              <div class="form-group col-8">
                <select class="form-control" name="titulo" required="true">
                  <option value="" disabled selected>Selecciona un titulo</option>
                  @foreach($titulos as $id => $titulo)
                   <option value="{{$titulo['id']}}">{{$titulo['nombre']}} Versión {{$titulo['version']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-4">
                <label for="fname">Plataforma:</label><br>
              </div>
              <div class="form-group col-8">
                <select class="form-control" name="plataforma" required="true">
                  <option value="" disabled selected>Selecciona una plataforma</option>
                  @foreach($plataformas as $id => $plataforma)
                   <option value="{{$plataforma['id']}}">{{$plataforma['nombre']}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-4">
                <label for="fname">Condición del juego:</label><br>
              </div>
              <div class="form-group col-8">
                <select class="form-control" name="condicion" required="true">
                  <option value="" disabled selected>Selecciona una condición</option>
                  @foreach($condiciones as $id => $condicion)
                   <option value="{{$condicion['id']}}">{{$condicion['nombre']}}</option>
                  @endforeach
                </select>
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