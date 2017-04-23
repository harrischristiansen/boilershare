@extends("app.containerwrapper")

@section("maincontent")
<div class="panel panel-default"><div class="panel-body">
		<a class="btn btn-xs btn-warning pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    <h3 class="text-center">Login
    </h3>
	<form method="post" action="{{ url('/login') }}" class="validate">
		{{ csrf_field() }}
		
		<label for="email">Email</label>
		<input type="text" name="email" id="email" class="form-control" placeholder="Email" data-bvalidator="required,email">
		<br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" data-bvalidator="required">
		<br>
		<input type="checkbox" name="remember"> Remember Me
		<br><br>
		<input type="submit" value="Login" class="btn btn-primary pull-right">
	</form>
</div></div>
@endsection
