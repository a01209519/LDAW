{{-- extends indica que la vista hereda de otra y va a inyectar contenidos de ella--}}
@extends("layout")

@section("page_title", "Titulo")

{{-- Permite añadir más cosas a una sección --}}
@section("css")
@parent
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo url('/styles/fonts.css'); ?>" />
@show

{{-- Contenido principal --}}
@section("main_content")
<div class="container"> 
  <div class="row"> 
    <div class="col-md-10">
      {{-- Regresar --}}
      <a href="{{ url('/')}}" class="btn btn-back"><span class="material-icons backspace">keyboard_backspace</span></a>
      <br><br>
      @foreach($titulo as $id => $titulo)
        {{-- Empieza Contenido --}}
        <div class="containerHeader">
          <div class="row">
            <div class="col-md-4">
               <img src="{{ url('img/titulos/'. $titulo['id'] .'.jpg') }}" style="width:12em;">
            </div>
            <div class="col-md-8">
              <h4 class="subtitulos"><strong>{{$titulo['nombre']}}</strong></h4>
              <h5 class="subtitulos">Descripción: {{$titulo['descripcion']}}</h5>

              <p> <?php $titulo['descripcion'] ?></p>

              <ul>
                  <li><span class="material-icons">nature</span> Xbox One</li>
                  <li><span class="material-icons">event</span>{{$titulo['version']}}</li>
              </ul>
          </div>
          
          <br>
          <br>
            
          <div class="row">
            <h5 class="subtitulos" style="margin-left:1em;">Reviews:</h5><br>
            <div class="col-md-12">
              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h4 class="display-12">Nombre Usuario</h4>
                  <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent. Comenario</p>
                </div>
              </div>
          </div>

         </div>


    </div>
    </div>
     @endforeach 
  </div>
</div> 
</div> 
@endsection


