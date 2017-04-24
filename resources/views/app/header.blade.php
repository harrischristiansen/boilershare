<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a id="navbar-logo" class="navbar-brand" href="/"></a>
		</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
			@if (Auth::guest())
				<li {!! Request::path()=="login" ? 'class="active"':'' !!}><a href="{{ route('login') }}">Login</a></li>
				<li {!! Request::path()=="register" ? 'class="active"':'' !!}><a href="{{ route('register') }}">Register</a></li>
			@else
				<li {!! Request::path()=="class" ? 'class="active"':'' !!}><a href="{{ route('classes') }}">Classrooms</a></li>
				@if (isset($classroom))
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ $classroom->name }}</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="{{ route('class', $classroom) }}">Classroom</a></li>
						<li><a href="{{ route('QA', $classroom) }}">Q&A</a></li>
						<li><a href="{{ route('resources', $classroom) }}">Resources</a></li>
					</ul>
				</li>
				@endif
			@endif
			</ul>
			<ul class="nav navbar-nav navbar-right">
			@if (!Auth::guest())
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li class="dropdown-header">{{ Auth::user()->name }}</li>
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
					</ul>
				</li>
			@endif
			</ul>
		</div>
	</div>
</nav>

@if(session()->has('alert'))
<div class="container">
	<div class="alert {{ session()->get('alert-class', 'alert-success') }}" role="alert">{{ session()->get('alert') }}</div>
	<?php session()->forget('alert'); ?>
</div>
@endif

@if (count($errors))
<div class="container">
	@foreach($errors->all() as $error)
	<div class="alert alert-danger" role="alert">{{ $error }}</div>
	@endforeach
</div>
@endif