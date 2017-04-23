@extends("app.containerwrapper")

@section("maincontent")
<h3 class="text-center">Reset Password</h3>
<form method="post" action="{{ url('/password/email') }}" class="validate">
	{{ csrf_field() }}
	
	<label for="email">Email</label>
	<input type="text" name="email" id="email" placeholder="Email" class="form-control" data-bvalidator="required,email">
	<br><br>
	<input type="submit" value="Send Password Reset Link" class="btn btn-primary">
</form>
@endsection

