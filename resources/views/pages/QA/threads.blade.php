@extends("app.containerwrapper")
@section('title', 'Q&A Threads')

@section("maincontent")

<h1>Q&A Threads
	<a href="{{ route("QA-create", $classroom) }}" type="button" class="btn btn-primary pull-right">Create Question</a>
</h1>


<table class="table table-striped table-hover table-clickable sortable">
	<thead>
		<tr>
			<th>Subject</th>
			<th># Replies</th>
			<th>Author</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($classroom->questions as $question)
		<tr>
			<td><a href="{{ route("QA-thread", [$classroom, $question]) }}">{{ $question->subject }}</a></td>
			<td>{{ count($question->answers)-1 }}</td>
			<td>{{ $question->user->name }}</td>
			<td>{{ $question->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
