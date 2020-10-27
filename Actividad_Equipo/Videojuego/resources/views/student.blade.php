@extends("layout")
@section("page_title",$students['nombre'])

@section("main_content")
<img src="<?php echo $students['ruta'];?>" width="250" height="200" class="rounded mx-auto d-block">

<dl class="row">
  <dt class="col-sm-3"><?php echo $students['nombre']?></dt>
  <dd class="col-sm-9"><?php echo $students['experiencia']?></dd>
</dl>
@endsection