<div class="panel panel-default"><div class="panel-body">
	{{ $answer->text }}
	<hr>
	<div>
		@can ('edit-answer', $answer)
			<a href="{{ route("QA-post-delete", [$classroom, $question, $answer]) }}" type="button" class="btn btn-xs btn-danger pull-left">Delete Post</a>
		@endcan
		<div class="pull-right">Posted By: <b>{{ $answer->user->name }}</b> - {{ $answer->created_at->diffForHumans() }}</div>
	</div>
</div></div>