
<div class="col-md-3">
<div class="card " style="width: 13rem; margin-top: 2rem;">
  <img class="card-img-top img-fluid" src="{{ url('img/titulos/'. $titulo['id'] .'.jpg') }}" alt="Card image cap" style="height: 19rem">
  <div class="card-body">
    
   <button 
      data-toggle="modal" 
      data-target="#modalVerDetalles{{$titulo['id']}}"
      type="button" 
      class="btn principal subtitulos btn-md btn-default">
        Ver Detalles
    </button>
    

      <x-modalVerDetalles :id="$titulo['id']" :titulo="$titulo"/>
 
    

  </div>
</div>
</div>

  

