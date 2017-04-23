@extends("emails.base")

@section("content")

<div class="message">
	<h2>Password Reset</h2>
	<p>We have received a request to reset the password for your Boiler Share account. To reset your password, please <a href="#">click here</a>.</p>
	<p>If the above link does not work, paste this url in your browser: [url here]<p>
	<p>If you did not make this request, simply ignore this email.</p>
	<p>Thanks,<br>
		Boiler Share
	</p>
</div>

@stop