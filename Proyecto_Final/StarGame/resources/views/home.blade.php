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
</div>

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
  <div class="row row-cols-2 row-cols-md-4">
 @foreach($titulo as $id => $titulo)

     <x-gameCard :id="$id" :titulo="$titulo" />

 @endforeach 
</div>
</div>
@endif
<x-modalRegistrarTitulo/>
@endsection