@extends("emails.base")

@section("content")

<div class="message">
	<h2>Account Created</h2>
	<p>An account has been created for you at <a href="{{ Request::root() }}">{{ Request::root() }}</a>.</p>
	<p>Your Account Email is: [email here]</p>
	<p>Thanks,<br>
		Boiler Share
	</p>
</div>

@stop