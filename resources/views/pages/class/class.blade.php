@extends("app.containerwrapper")
@section('title', 'Classroom: '.$classroom->name)

@section("maincontent")

<div class="panel panel-default"><div class="panel-body">
    <h2 class="text-center">Classroom: {{ $classroom->name }}</h2>
	<ul>
		<li><b># Q&A Threads</b>: {{ count($classroom->questions) }}</li>
		<li><b># Resources</b>: {{ count($classroom->resources) }}</li>
		<li><b>University</b>: {{ $classroom->university->name }}</li>
		<li><b>Created At</b>: {{ $classroom->created_at->diffForHumans() }}</li>
		<li><b>Updated At</b>: {{ $classroom->updated_at->diffForHumans() }}</li>
	</ul>
	@can ('manage-classroom', $classroom)
	<a href="{{ route("editClass", $classroom) }}" type="button" class="btn btn-primary">Edit Classroom</a>
	@endcan
	<a href="{{ route("QA", $classroom) }}" type="button" class="btn btn-primary">Q&A</a>
</div>

@stop