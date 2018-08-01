<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{csrf_token()}}">
		<script>window.laravel = {csrf_token: '{{csrf_token()}}'} </script>
		<title>@yield('title')</title>

		<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>

<body>
	<div id="app">
    <nav>
		<div class="scl-icons">
			<i class="fab fa-twitter"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-facebook-f"></i>
		</div>
		
        <div id="icon">
            <div id="burger">
            </div>
        </div>
        <div id = "full-overlay"></div>
		<div id ="side-drawer">
			<div class="container">
				<ul>
					<div id="main-content">
						<li><p>01</p><a href="{{route('projects')}}">Projects</a></li>
						<li><p>02</p><a href="{{route('services')}}">Services</a></li>
					</div>
					<div id="sub-content">
						<li><a style="color: darkred">TIS</a></li>
						<li><a>About</a></li>
						<li><a href="{{route('blog.index')}}">Blog</a></li>
						<li><a href="{{route('contact')}}">Contact us</a></li>
					</div>
				</ul>
			</div>
		</div>
    </nav>

	@yield('content')
	
	<footer>
		<p>COPYRIGHT © 2018 AWTOMEDDIA. ALL RIGHTS RESERVED.</p>
	</footer>

	</div>
	<script src = "{{asset('js/app.js')}}"></script>
	
</body>
</html>