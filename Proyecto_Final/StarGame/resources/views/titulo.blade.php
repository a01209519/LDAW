{{-- extends indica que la vista hereda de otra y va a inyectar contenidos de ella--}}
@extends("layout")

@section("page_title", $titulo['nombre'])

{{-- Permite añadir más cosas a una sección --}}
@section("css")
@parent
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo url('/styles/fonts.css'); ?>" />
<link rel="stylesheet" href="<?php echo url('/styles/titulos.css'); ?>" />
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0" nonce="kC2aAHQV"></script>
@show

{{-- Contenido principal --}}
@section("main_content")
<div class="container"> 
  <div class="row"> 
    <div class="col-md-10">
 
      <br><br>
        {{-- Empieza Contenido --}}
        <div class="containerHeader">
          <div class="row">
            <div class="col-md-4">
               <img src="{{ url('img/titulos/'. $titulo['id'] .'.jpg') }}" style="width:12em;">
            </div>
            <div class="col-md-8">
              <h4 class="subtitulos"><strong>{{$titulo['nombre']}}</strong></h4>
              <h5 class="subtitulos"><Strong>Descripción:</Strong> {{$titulo['descripcion']}}</h5>

              <p> <?php $titulo['descripcion'] ?></p>

              <ul>
                  <li><Strong>Version</Strong> {{$titulo['version']}}</li>
              </ul>
              <?php $src = 'https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Ftitulos%'.$titulo['id'].'F1&layout=button_count&size=small&width=99&height=20&appId';?>
              <div class="fb-share-button" data-href="http://127.0.0.1:8000/titulos/{{$titulo['id']}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Ftitulos%2F%257B%257B%24titulo%5B%27id%27%5D%257D%257D&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
          </div>

          @if (empty($resena))
          <h4>Aún no hay reseñas sobre este videojuego</h4>
          @endif

          @if(!empty($resena))
          <div class="row">
            <h5 class="subtitulos" style="margin-left:1em; margin-top: 1em;"><Strong>Conoce la opinion de la comunidad:</Strong></h5><br>
            <div class="col-md-12">
              @foreach ($resena as $id => $resena)
              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h6 class="display-12">{{$resena['user']}}</h6>
                  <p class="lead">{{$resena['comentario']}}</p>
                </div>
              </div>
              <hr>
              @endforeach
          </div>
         </div>
         @endif
          
          @if(session('id'))
         <div class="row">
            <div class="col-md-12">
              <form method="POST" action="{{route('registrar_resena')}}"enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                  <h6 class="display-12">Comenta que te pareció el juego</h6>
                  <div class="input-group">
                    
                    <textarea class="form-control" aria-label="With textarea" style="width:39.5em;" name="resena" required="true"></textarea>
                  </div>
                  <input class="form-control" type="hidden" name="id_titulo"value="{{$titulo['id']}}">
                  <button type="submit" class="btn btn-success" style="margin-left:35em; margin-top:.5em;">Enviar</button>
                </div>
              </form>
          </div>
         </div>
         @endif

    </div>
    </div>

  </div>
</div> 
</div> 
@endsection


