@extends("app.containerwrapper")
@section('title', 'Q&A Thread: '.$question->subject)

@section("maincontent")

@can ('edit-question', $question)
<a href="{{ route("QA-thread-delete", [$classroom, $question]) }}" type="button" class="btn btn-sm btn-danger pull-right">Delete Thread</a>
@endcan
<h2 class="text-center">Q&A Thread: {{ $question->subject }}</h2>

@foreach ($question->answers as $answer)
	@include('pages.QA.thread-entry', ['answer' => $answer])
@endforeach

@include('pages.QA.thread-entry-new')

@stop
