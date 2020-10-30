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
<h2 class="titulos text-center text-uppercase">Videojuegos</h2>

<div class="container">
  <div class="row">
  <section class="row catalog card-group">
 @foreach($titulo as $id => $titulo)

     <x-gameCard :id="$id" :titulo="$titulo" />

 @endforeach 
</section>
</div>
</div>

@endsection