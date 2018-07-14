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
		<side-drawer></side-drawer>
	</div>
	<div id= "main">
		<div class="container col-10 col-offset-1 col-md-8" id= "feature">
			<div class= "intro-block col-5 col-md-3" id="projects">
				<h5><a href="">PROJECTS</a></h5>
			</div>
			<div class= "intro-block col-5 col-md-3" id="services">
				<h5><a href ="">SERVICES</a></h5>
			</div>
		</div>
	</div>


	<div class="row" id="about-block">
		<div class="col-12 col-md-5" id="about-content">
			<span class="sum">-ABOUT US-</span>
			<h3>
				WE ENHANCE<br>YOUR WORLD
			</h3>
			<p> 
				Lorem ipsum dolor sit amet,
				facilisis ligula sit justo.Eget tortor ut suspendisse dui pede, 
				pellentesque auctor ut tellus, porttitor magnis morbi vel accumsan
				ligula lacus. Ipsum dictum odio, luctus convallis expedita consectetuer
				vivamus pellentesque, eu suspendisse tellus leo sagittis wisi a, amet 
				a felis sed lectus
			</p>
			<button><span>KNOW MORE</span></button>
		</div>


		<div class="col-12 col-md-7" id="about-image">
			<img src="" alt=""></img>
			<div class="top-corner">
				<div class="vertical-line"></div>
				<div class="horizontal-line"></div>
			</div>
			<div class="bottom-corner">
				<div class="vertical-line"></div>
				<div class="horizontal-line"></div>
			</div>

		</div>
	</div>


	<div class = "row" id="services-block">
	</div>


	<div class= "col-offset-2 row"id= "blog-block">
		<div class= "col-12" style="text-align:center;">
			<span class="sum" style="left:0;">-BLOG-</span>
			<h3>TAKE A LOOK AT OUR POSTS</h3>
		</div>			<div class="container-fluid wrapper row">
		<div class="featured-blog col-5 col-md-2">				
			</div>
			<div class="featured-blog col-5 col-md-2">
					
			</div>
			<div class="featured-blog col-5 col-md-2">
					
			</div>
			<div class="featured-blog col-5 col-md-2">
					
			</div>
		</div>
		<button><span>SHOW MORE</span></button>
	
	</div>


	
	<script src = "{{asset('js/app.js')}}"></script>
	
</body>
</html>
