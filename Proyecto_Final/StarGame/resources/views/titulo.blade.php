{{-- extends indica que la vista hereda de otra y va a inyectar contenidos de ella--}}
@extends("layout")

@section("page_title", $titulo['nombre'])

{{-- Permite añadir más cosas a una sección --}}
@section("css")
@parent
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo url('/styles/fonts.css'); ?>" />
<link rel="stylesheet" href="<?php echo url('/styles/titulos.css'); ?>" />
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
                  <li><Strong>Plataforma</Strong> Xbox One</li>
                  <li><Strong>Version</Strong> {{$titulo['version']}}</li>
              </ul>
          </div>

          
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
          
         <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                  <h6 class="display-12">Comenta que te pareció el juego</h6>
                  <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" style="width:39.5em;"></textarea>
                  </div>
                  <button type="button" class="btn btn-success" style="margin-left:35em; margin-top:.5em;">Enviar</button>
                </div>

          </div>
         </div>

    </div>
    </div>

  </div>
</div> 
</div> 
@endsection


