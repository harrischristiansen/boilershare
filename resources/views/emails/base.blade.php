<!DOCTYPE HTML>
<html><head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>{{ env('ORG_NAME') }} Account Created</title>
	<style>
	body {
		background-color: #CCCCCC;
		font-family: sans-serif;
	}
	
	#header {
		width: 100%;
		padding-top: 10px;
		text-align: center;
	}
	#headerImage {
		width: 160px;
	}
	
	.message {
		margin-top: 15px;
		background-color: #EEEEEE;
		border-radius: 4px;
		padding: 20px;
		width: 500px;
		margin-left: auto;
		margin-right: auto;
	}
	
	a {
		color: #0043bb;
		text-decoration: none;
	}
	
	a:hover {
		color: #4485ff;
	}
	
	#footer {
		padding: 5px;
		width: 500px;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
	</style>
</head><body>
	<div id="header">
		<img src="{{ Request::root() }}/images/logo_sm.png" id="headerImage">
	</div>
	
	@yield("content")
	
	<div id="footer">
		Sent by <a href="{{ Request::root() }}">Boiler Share</a>
	</div>
</body></html>