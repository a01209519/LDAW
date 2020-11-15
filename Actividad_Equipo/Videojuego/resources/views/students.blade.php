@extends("layout")
@section("page_title","Students")
@section("Titulo")

<div class="container" align="center">
<h1>Students</h1>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-10"></div>
		<div class="col">
			<a class="btn btn-secondary btn-lg" href="{{route('students.create')}}">Agregar</a>
		</div>
	</div>
</div>
@endsection
@section("main_content")
<div class="container">
<table class="table">
	<thead>
		<tr>
			<th scope="col>"> Nombre</th>
			<th scope="col"> Apellido</th>
		</tr>
	</thead>
	<tbdody>

@foreach ($students as $id => $student)

		<tr>
			<td><a href="{{route('students.show',$student['id'])}}"><?php echo $student["nombre"]?></a></td>
			<td><?php echo $student["apellidos"]?></td>
		</tr>

@endforeach
</tbdody>
</table>
</div>
@endsection