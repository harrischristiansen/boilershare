@extends("app.containerwrapper")
@section("title")
Thread: {{ $answer->question->subject }}
@stop

@section("maincontent")
<form method="post" action="{{ route("QA-edit-post", [$classroom, $answer]) }}" class="validate">
	{!! csrf_field() !!}
	<div class="panel panel-default"><div class="panel-body">
		<h3 class="text-center">Thread: {{ $answer->question->subject }}</h3>
		<label for="text">Answer</label>
		<textarea name="text" id="text" placeholder="Answer" class="form-control" data-bvalidator="required">{{ $answer->text }}</textarea>
		
		<input type="submit" value="Save" class="btn btn-primary">
	</div></div>
</form>
@endsection