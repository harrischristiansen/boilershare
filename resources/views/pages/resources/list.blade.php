@extends("app.containerwrapper")
@section('title', 'Q&A Threads')

@section("maincontent")

<h1>Resources
	<a href="{{ route("resource-create", $classroom) }}" type="button" class="btn btn-primary pull-right">Add Resource</a>
</h1>


<table class="table table-striped table-hover table-clickable sortable">
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($classroom->resources as $resource)
		<tr>
			<td><a href="{{ $resource->storage_path() }}">{{ $resource->title }}</a></td>
			<td>{{ $resource->user->name }}</td>
			<td>{{ $resource->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
