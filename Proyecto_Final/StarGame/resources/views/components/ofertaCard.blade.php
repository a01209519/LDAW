<div class="col-mb-4">
<div class="card " style="width: 13rem; margin-top: 2rem;">
  <img class="card-img-top img-fluid" src="{{ url('img/titulos/'. $oferta['id_titulo'] .'.jpg') }}" alt="Card image cap" style="height: 19rem">
  <div class="card-body">
    
   <button 
      data-toggle="modal" 
      data-target="#modalVerDetalles{{$oferta['id_titulo']}}"
      type="button" 
      class="btn principal subtitulos btn-md btn-default">
        Ver Detalles
    </button>
    
      <x-modalVerDetallesofertas :id="$oferta['id_titulo']" :oferta="$oferta"/>
    </div>
  </div>
</div>



