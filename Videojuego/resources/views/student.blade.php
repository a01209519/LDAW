@extends("layout")
@section("page_title",$students['nombre'])

@section("main_content")
<h1 align="center"> <?php echo $students["nombre"];?></h1>
@endsection