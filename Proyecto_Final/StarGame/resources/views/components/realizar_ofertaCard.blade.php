
<div class="col-mb-4">
<div class="card " style="width: 13rem; margin-top: 2rem;">
  <img class="card-img-top img-fluid" src="{{ url('img/titulos/'. $titulo['id_titulo'] .'.jpg') }}" alt="Card image cap" style="height: 19rem">
  <div class="card-body">
    
   <button 
      data-toggle="modal" 
      data-target="#modalRealizarOferta{{$titulo['Id']}}"
      type="button" 
      class="btn principal subtitulos btn-md btn-default">
        Ver Detalles
    </button>
    

      <x-modalRealizarOferta :id="$titulo['Id']" :titulo="$titulo" :juegos="$variable" />
 
    

  </div>
</div>
</div>