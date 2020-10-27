@extends("layout")
@section("page_title",$students['nombre'])

@section("main_content")
<br>
<br>
<div class="container">
<dl class="row">
  <dt class="col-sm-4 text-center"><img src="<?php echo $students['ruta'];?>" width="250" height="250" class="rounded mx-auto d-block"><br><?php echo $students['nombre']?> </dt>
  
  <dd class="col-sm-6 text-justify"><?php echo $students['experiencia']?></dd>
</div>
</dl>
@endsection