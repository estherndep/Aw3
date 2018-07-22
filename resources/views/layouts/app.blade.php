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
    <nav>
        <div id="icon" onClick = "toggleActive()">
            <div id="burger">
            </div>
        </div>
        <div id = "full-overlay"></div>
		<div id ="side-drawer">
			<div class="container">
				<ul>
					<div id="main-content">
						<li><a>Projects</a></li>
						<li><a>Services</a></li>
					</div>
					<div id="sub-content">
						<li><a style="color: darkred">Tesla</a></li>
						<div id="sub-sub-content">
							<li><a>Products</a></li>
							<li><a>Services</a></li>
						</div>
						<li><a>About</a></li>
						<li><a>Blog</a></li>
						<li><a>Contact us</a></li>
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