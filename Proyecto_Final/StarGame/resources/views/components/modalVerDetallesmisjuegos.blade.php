<!-- Modal -->
<div class="modal fade" id="modalVerDetalles{{$titulo['id_titulo']}}"  role="dialog" aria-hidden="true">
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
            <p class="subtitulos"><strong>Plataforma:&nbsp</strong>{{$titulo['Plataforma']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Condición:&nbsp </strong>{{$titulo['Condicion']}}</p>
          </div>
        </div>

      </div>

      <div class="modal-footer">
          <a class="btn btn-secondary" href="{{url('titulos/'. $titulo['id_titulo'])}}">Ver mas</a>
      </div>
    </div>
  </div>
</div>