@extends("app.containerwrapper")

@section("maincontent")
<div class="panel panel-default"><div class="panel-body">
	<h3 class="text-center">Form</h3>
	<form method="post" action="/form.html" class="validate">
		{!! csrf_field() !!}
		<label for="name">Name</label>
		<input type="text" name="name" id="name" placeholder="Name" class="form-control" data-bvalidator="required" data-bvalidator-msg="Name Required">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email" id="email" placeholder="Email" class="form-control" data-bvalidator="required,email" data-bvalidator-msg="Email Required">
		<br>
		<label for="date">Date</label>
		<input type="text" name="date" id="date" placeholder="Date" class="form-control datepicker" data-bvalidator="required,date[yyyy-mm-dd]" data-bvalidator-msg="Date Required">
		<br>
		<input type="submit" value="Submit" class="btn btn-primary">
	</form>
</div></div>
@endsection
