@extends("layout")
@section("page_title","Students")
@section("main_content")
<?php
foreach($students as $id => $student){ 
?>
<div class="container">
	<strong>Nombre: </strong><?php echo $student["nombre"]?><br>
	<strong> Apellido: </strong> <?php echo $student["apellidos"]?>
	<hr/>
</div>
<?php }
?>
@endsection