
<div class="col">
<div class="card " style="width: 13rem; margin-top: 2rem;">
  <img class="card-img-top img-fluid" src="{{ url('img/titulos/'. $titulo['id_titulo'] .'.jpg') }}" alt="Card image cap" style="height: 19rem">
  <div class="card-body">
    
   <button 
      data-toggle="modal" 
      data-target="#modalVerDetalles{{$titulo['id_titulo']}}"
      type="button" 
      class="btn principal subtitulos btn-md btn-default">
        Ver Detalles
    </button>
    

      <x-modalVerDetallesmisjuegos :id="$titulo['id_titulo']" :titulo="$titulo"/>
 
    

  </div>
</div>
</div>





