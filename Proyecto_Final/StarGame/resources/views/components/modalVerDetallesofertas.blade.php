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
          @if(isset($oferta['Telefono']))
          <hr />
        <h3 class="subtitulos">DATOS DE CONTACTO</strong></h3></center>
        <br />
        <div class="row justify-content-left">
            <p class="subtitulos"><strong>Nombre:&nbsp </strong>{{$oferta['Nombre']}}</p>
          </div>
          <div class="row justify-content-left">
            <p class="subtitulos"><strong>Teléfono:&nbsp </strong>{{$oferta['Telefono']}}</p>
          </div>
        @endif

      </div>
    </div>

      @if(!isset($oferta['Telefono']))
      <div class="modal-footer">
        <div class="row">
          <a class="btn btn-success" href="{{route('aceptar_oferta',$oferta['id_oferta'])}}">Aceptar</a>
        </div>
        <div class="row">
          <a class="btn btn-danger" href="{{route('rechazar_oferta',$oferta['id_oferta'])}}" onclick="return confirm('<?php echo "¿Deseas rechazar la oferta ".$oferta['Titulo']."?"?>')">Rechazar</a>
        </div>
    </div>
    @endif
    </div>
  </div>
</div>