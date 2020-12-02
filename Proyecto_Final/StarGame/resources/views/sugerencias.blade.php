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
      <h2 class="titulos text-center text-uppercase">Sugerencias</h2>
    </div>
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
</div>


@if (empty($titulo))
<h4 align="center">No se encontraron resultados</h4>
@endif
@if(!empty($titulo))
<div class="container">
  <div class="row">
  <section class="row catalog card-group">
 @foreach($titulo as $id => $titulo)

     <x-sugerenciasCard :id="$id" :titulo="$titulo" />

 @endforeach 
</section>
</div>
</div>
@endif
@endsection