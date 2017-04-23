<form method="post" action="{{ route("QA-edit-post", [$classroom, $question, 0]) }}" class="validate">
	{!! csrf_field() !!}
	<div class="panel panel-default"><div class="panel-body">
		<label for="text">Answer</label>
		<textarea name="text" id="text" placeholder="Answer" class="form-control" data-bvalidator="required"></textarea>
		<br>
		
		<input type="submit" value="Save & Submit" class="btn btn-primary">
	</div></div>
</form>