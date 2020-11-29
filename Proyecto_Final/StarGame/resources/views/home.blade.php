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
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalTitulo"><i class="fas fa-plus"></i></button>
    </div>
    @endif
  </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('alerta'))
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="height: 200px;">
<div class="toast">
  <div class="toast-header">
    Bienvenida
  </div>
  <div class="toast-body">
    Bienvenido de vuelta {{session('nombre')}}
  </div>
</div>
</div>
<script>
$(document).ready(function(){
  $('.toast').toast({
    delay:5000
  });
  $('.toast').toast('show');
});
</script>
<?php session()->forget('alerta');?>
@endif

@if (empty($titulo))
<h4 align="center">No se encontraron resultados</h4>
@endif
@if(!empty($titulo))
<div class="container">
  <div class="row">
  <section class="row catalog card-group">
 @foreach($titulo as $id => $titulo)

     <x-gameCard :id="$id" :titulo="$titulo" />

 @endforeach 
</section>
</div>
</div>
@endif
<x-modalRegistrarTitulo/>
@endsection