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
      <button type="button" class="btn btn-success btn-sm" href="#"><i class="fas fa-plus"></i></button>

    </div>
    @endif
  </div>
</div>

@if(empty($juegos))
<h4>No hay resultados</h4>
@endif

@if(!empty($juegos))
<div class="container">
  <div class="row">
  <section class="row catalog card-group">
 @foreach($juegos as $id => $juegos)

     <x-mijuegoCard :id="$id" :titulo="$juegos" />

 @endforeach 
</section>
</div>
</div>
@endif

@endsection