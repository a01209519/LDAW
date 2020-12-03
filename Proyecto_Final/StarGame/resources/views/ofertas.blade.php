{{-- extends indica que la vista hereda de otra y va a inyectar contenidos de ella--}}
@extends("layout")

@section("page_title", $videojuego[0]['Titulo'])

{{-- Permite añadir más cosas a una sección --}}


{{-- Contenido principal --}}
@section("main_content")
<div class="container"> 
  <div class="row"> 
    <div class="col-md-10">
 
      <br><br>
        {{-- Empieza Contenido --}}
        <div class="containerHeader">
          <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-2">
               <img src="{{ url('img/titulos/'. $videojuego[0]['titulo_id'] .'.jpg') }}" style="width:12em;">
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>
<hr />
<br>
@if(session('message'))
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('message')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>
  </div>
  @endif
  @if(empty($juego_aceptado))
  @if(empty($ofertas))
<h4 align="center">No tienes ofertas aún</h4>
@endif
@endif

<div class="container"> 
  <div class="row row-cols-2 row-cols-md-4">
@foreach($ofertas as $id=>$oferta)
<x-ofertaCard :id="$id" :oferta="$oferta"/>
@endforeach
</div>
</div>

@if(!empty($juego_aceptado))
<div class="container">
  <div class="row row-cols-2 row-cols-md-4">
 @foreach($juego_aceptado as $id => $oferta)
 <x-ofertaCard :id="$id" :oferta="$oferta"/>
 @endforeach 
  </div>
</div>
@endif




@endsection