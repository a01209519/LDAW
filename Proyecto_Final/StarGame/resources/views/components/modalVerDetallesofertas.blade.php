<!-- Modal -->
<div class="modal fade" id="modalVerDetalles{{$oferta['id_titulo']}}"  role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <center>
          <img class="card-img-top" src="{{ url('img/titulos/'. $oferta['id_titulo'] .'.jpg') }}" alt="Card image cap" style="width:12rem;">      
        <hr />
        <h3 class="subtitulos">CARACTERÍSTICAS</strong></h3></center>
        <br />
        <div class="container">
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Titulo: &nbsp</strong>{{$oferta['Titulo']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Edicion: &nbsp</strong>{{$oferta['Version']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Plataforma:&nbsp</strong>{{$oferta['Plataforma']}}<br></p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Condición:&nbsp </strong>{{$oferta['Condicion']}}</p>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <div class="row">
          <a class="btn btn-secondary" href="">Ver Ofertas</a>
        </div>
        <div class="row">
          <a class="btn btn-danger" href="#">Eliminar</a>
        </div>
    </div>
    </div>
  </div>
</div>