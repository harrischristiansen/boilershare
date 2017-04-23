@extends("app.containerwrapper")
@section("title")
{{ $question->subject ? "Edit ".$question->subject : "Create Question" }}
@stop

@section("maincontent")
<form method="post" action="{{ route("QA-create-post", [$classroom, $question]) }}" class="validate">
	{!! csrf_field() !!}
	<div class="panel panel-default"><div class="panel-body">
		<h3 class="text-center">
			{{ $question->subject ? "Edit ".$question->subject : "Create Question" }}
		</h3>
		<label for="subject">Subject</label>
		<input type="text" name="subject" id="subject" placeholder="subject" class="form-control" data-bvalidator="required" value="{{ $question->subject }}">
		<br>
		<label for="text">Question</label>
		<textarea name="text" placeholder="Question" class="form-control" data-bvalidator="required">{{ $question->question() }}</textarea>
		<br>
		
		<input type="submit" value="{{ $question->subject ? 'Save Question' : 'Submit Question' }}" class="btn btn-primary">
	</div></div>
	
</form>
@endsection