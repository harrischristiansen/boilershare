@extends("app.containerwrapper")
@section("title")
{{ $classroom->name ? "Edit ".$classroom->name : "Create Classroom" }}
@stop

@section("maincontent")
<div class="panel panel-default"><div class="panel-body">
	<h3 class="text-center">
		{{ $classroom->name ? "Edit Classroom: ".$classroom->name : "Create Classroom" }}
	</h3>
	<form method="post" action="{{ route("editClass", $classroom->id) }}" class="validate">
		{!! csrf_field() !!}
		<label for="name">Class Name</label>
		<input type="text" name="name" id="name" placeholder="Name" class="form-control" data-bvalidator="required" value="{{ $classroom->name }}">
		<br>
		<label for="university">University</label>
		<input type="text" name="university" id="university" placeholder="University" class="form-control" data-bvalidator="required" value="{{ $classroom->university ? $classroom->university->name : "" }}">
		<br>
		<input type="submit" value="Save Classroom" class="btn btn-primary">
	</form>
</div></div>
@endsection
