@extends("layout")
@section("Titulo")
<div class="container" align="center">
	<h1>Form</h1>
</div>
@endsection

@section("main_content")
<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
	@csrf
<div class="container">
	<div class="row">
		<div class="col">
			<input class="form-control" type="text" placeholder="Nombre" name="nombre">
		</div>
		<div class="col">
			<input class="form-control" type="text" placeholder="Apellido" name="apellido">
		</div>
		<button type="submit" class="btn btn-secondary btn-sm">
			Enviar
		</button>
	</div>
	<br>
	<label>Selecciona tu foto</label>
	<input class="form-control-file" type="file" name="foto">
	<textarea class="form-control" rows="3" name="experiencia" placeholder="Escribe tu experiencia en desarrollo web"></textarea>
</div>
</form>
@endsection