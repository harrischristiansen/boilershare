@extends("app.base")

@section("content")

<!-- Content -->
<div class="container theme-showcase" role="main">
	<div class="jumbotron">
		<div id="home-logo" class="logo"></div>
		<p>Boiler Share - Add collaboration to your classroom!</p>
	</div>
	
	<?php
	$panels[0] = ['color'=>'primary', 'icon'=>'fa-university', 'text'=>'Create collaborative classrooms'];
	$panels[1] = ['color'=>'green', 'icon'=>'fa-folder-open', 'text'=>'Share files and resources'];
	$panels[2] = ['color'=>'yellow', 'icon'=>'fa-line-chart', 'text'=>'Increase student engagement'];
	$panels[3] = ['color'=>'red', 'icon'=>'fa-question-circle-o', 'text'=>'Ask questions and share answers'];
	?>
	<div class="row">
		@foreach($panels as $panel)
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="panel panel-{{ $panel['color'] }}">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa {{ $panel['icon'] }} fa-4x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div>{!! $panel['text'] !!}</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@stop