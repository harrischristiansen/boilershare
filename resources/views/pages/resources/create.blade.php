@extends("app.containerwrapper")
@section("title")
Upload Resources
@stop

@section("maincontent")
<form method="post" action="{{ route("resource-create-post", [$classroom]) }}" enctype="multipart/form-data" class="validate">
	{!! csrf_field() !!}
	<div class="panel panel-default"><div class="panel-body">
		<h3 class="text-center">Upload Resource</h3>
		<label for="title">Title</label>
		<input type="text" name="title" id="title" placeholder="Title" class="form-control" data-bvalidator="required">
		<br>
		<label for="resourceFile">Resource File</label>
		<input type="file" name="file" id="file" class="form-control" data-bvalidator="required">
		<br>
		
		<input type="submit" value="Upload Resource" class="btn btn-primary">
	</div></div>
	
</form>
@endsection