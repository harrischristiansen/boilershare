@extends("app.containerwrapper")

@section("maincontent")
<div class="panel panel-default"><div class="panel-body">
	<h3 class="text-center">Create Account</h3>
	<form method="post" action="{{ url('/register') }}" class="validate">
		{{ csrf_field() }}
		
		<label for="name">Full Name</label>
		<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" data-bvalidator="required" data-bvalidator-msg="Full Name Required">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" class="form-control" placeholder="Email" data-bvalidator="required,email" data-bvalidator-msg="Email Required">
		<br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" data-bvalidator="required" data-bvalidator-msg="A password is required">
		<br>
		<label for="password_confirmation">Confirm Password</label>
		<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" data-bvalidator="required,equalto[password]" data-bvalidator-msg="Password does not match">
		<br>
		<input type="submit" value="Create Account" class="btn btn-primary">
	</form>
</div></div>
@stop
