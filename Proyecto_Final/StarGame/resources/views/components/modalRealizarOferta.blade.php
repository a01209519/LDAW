<!-- Modal -->
<div class="modal fade" id="modalRealizarOferta{{$titulo['Id']}}"  role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <img class="card-img-top" src="{{ url('img/titulos/'. $titulo['id_titulo'] .'.jpg') }}" alt="Card image cap" style="width:12rem;">      
        <hr />
        <h3 class="subtitulos">CARACTERÍSTICAS</strong></h3></center>
        <br />
        <div class="container">
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Titulo: &nbsp</strong>{{$titulo['Titulo']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Edicion: &nbsp</strong>{{$titulo['Edicion']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Plataforma:&nbsp</strong>{{$titulo['Plataforma']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Condición:&nbsp </strong>{{$titulo['Condicion']}}</p>
          </div>

        </div>
        @if(!empty($juegos))
        <hr />
         <center><h3 class="subtitulos">TU OFERTA</strong></h3></center>
         <form method="POST" action="{{route('ofertas.store')}}" enctype="multipart/form-data">
            @csrf
             <input type="hidden" id="" name="id_videojuego_ofertado" value="{{$titulo['Id']}}">
         <div class="form-row">
              <div class="col-4">
                <label for="video">Videojuego:</label><br>
              </div>
              <div class="form-group col-8">
                <select class="form-control" name="id_videojuego_recibido" required="true">
                  <option value="" disabled selected>Selecciona un videojuego</option>
                  @foreach($juegos as $id => $juego)
                   <option value="{{$juego['Id']}}">{{$juego['Titulo']}} Versión {{$juego['Edicion']}}</option>
                  @endforeach
                </select>
              </div>
          </div>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
        </form>
         @endif

      </div>
    </div>
  </div>
</div>