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
    <div class="col-md-12">
     
    </div>
  </div>
 
  <section class="row catalog card-group">

    

    <div class="col-md-4 col-sm-12 ">

      

    </div>
 

</section>
</div>
@endsection