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
		<header class="nav-header">
			<div class="container-fluid">
				<div class="logo-container"> 
					<div class="logo-wrapper"></div>
				</div>
				<nav class="nav-block" id ="top-nav">
					<ul>
						<div id="main-content">
							<li class="list-head"><p>01</p><h3><a href="/">Home</a></h3></li>
							<li class="list-head"><p>02</p><h3><a href="{{route('projects')}}">Projects</a></h3></li>
							<li class="list-head" id="service"><p>03</p><h3><span>Services</span></h3></li>
							<div class="sub-content" id="service-links">
									<li><a href="{{url('/services/residential')}}">Residential</a></li>
									<li><a href="{{url('/services/commercial')}}">Commercial</a></li>
									<li><a href="{{url('/services/hospitality')}}">Hospitality</a></li>
								</div>
						</div>
						<div class="sub-content">
							<li><a style="color: darkred">TIS</a></li>
							<li><a href="{{route('about')}}">About</a></li>
							<li><a href="{{route('blog.index')}}">Blog</a></li>
							<li><a href="{{route('contact')}}">Contact us</a></li>
						</div>
						<div class="scl-icons">
							<i class="fab fa-twitter"></i>
							<i class="fab fa-instagram"></i>
							<i class="fab fa-facebook-f"></i>
						</div>
					</ul>
				</nav>
				<div id="icon">
						<div id="burger">
						</div>
				</div>
			</div>
		</header>
		<div class="overlay full"></div>

	@yield('content')
	<footer>
		<p>COPYRIGHT © 2018 AWTOMEDDIA. ALL RIGHTS RESERVED.</p>
	</footer>
	<script src = "{{asset('js/jquery.min.js')}}"></script>
	<script src = "{{asset('js/app.js')}}"></script>
	@yield('scripts')
</body>
</html>