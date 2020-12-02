{{-- extends indica que la vista hereda de otra y va a inyectar contenidos de ella--}}

@extends("layout")

@section("page_title", "Inicio")

{{-- Permite añadir más cosas a una sección --}}
@section("css")
@parent
<link rel="stylesheet" href="<?php echo url('/styles/fonts.css'); ?>" />
@show

{{-- Contenido principal --}}
@section("main_content")
<div class="container">
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-s4">
      <h2 class="titulos text-center text-uppercase">Videojuegos</h2>
    </div>
    @if(session('id'))
    <div class="col-1">
      <br>
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalRegistrarJuego"><i class="fas fa-plus"></i></button>

    </div>
    @endif
  </div>
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
  @if(session('error'))
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{session('error')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>
  </div>
  @endif
  @if(empty($juegos))
  <div class="row">
    <div class="col-4">
    </div>
    <div clas="col-4">
  <h4>No hay resultados</h4>
</div>
  </div>
@endif
</div>

@if(empty($juegos_usuario))
@if(!empty($juegos))
<div class="container">
<div class="row row-cols-2 row-cols-md-4">
 @foreach($juegos as $id => $juego)

     <x-mijuegoCard :id="$id" :titulo="$juego"/>

 @endforeach 
</div>
</div>
@endif
@endif

@if(!empty($juegos_usuario))
@if(!empty($juegos))
<div class="container">
<div class="row row-cols-2 row-cols-md-4">
 @foreach($juegos as $id => $juego)

     <x-realizar_ofertaCard :id="$id" :titulo="$juego" :variable="$juegos_usuario"/>

 @endforeach 
</div>
</div>
@endif
@endif


@endsection