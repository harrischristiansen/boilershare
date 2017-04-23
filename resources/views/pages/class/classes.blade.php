@extends("app.containerwrapper")
@section('title', 'Classrooms')

@section("maincontent")

<h1>My Classrooms
	<a href="{{ route("createClass") }}" type="button" class="btn btn-primary pull-right">Create Class</a>
</h1>


<table class="table table-striped table-hover table-clickable sortable">
	<thead>
		<tr>
			<th>Class Name</th>
			<th>Last Updated</th>
			<th>University</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($classrooms as $class)
		<tr>
			<td><a href="{{ route("class", $class->id) }}">{{ $class->name }}</a></td>
			<td>{{ $class->updated_at->diffForHumans() }}</td>
			<td>{{ $class->university->name }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
