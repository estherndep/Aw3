<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{csrf_token()}}">
		<script>window.laravel = {csrf_token: '{{csrf_token()}}'} </script>
		<title>test</title>

		<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>

<body>
	<div id="app">


	@yield('content')
	
	<footer>
		<p>COPYRIGHT © 2018 AWTOMEDDIA. ALL RIGHTS RESERVED.</p>
	</footer>

	</div>
	<script src = "{{asset('js/app.js')}}"></script>
</body>
</html>