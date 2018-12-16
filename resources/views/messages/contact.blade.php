@extends('layouts.app')
@section ('content')


<side-drawer></side-drawer>

<div class="content ">	
	<div id= "design"></div>
	<div class="col-12 inverse" id="info-block">	

		<h3>GET IN TOUCH</h3>
		<h6>We'd love to hear from you</h6>

		<div id="contact-wrapper">

			<div class="col-12 col-md-4" id="contact">

				<h5><strong>Contact:</strong></h5>

				<div class="info-item col-11">		
							
					<h6>+2348106465798</h6>		

				</div>

				<div class="info-item  col-11">
								
					<h6>example@example.com</h6>	
						
				</div>

			</div>

			<div class="col-12 col-md-4" id="address">

				<h5><strong>Address:</strong></h5>

				<div class="info-item col-11">
						 
					<h6>61 Selly Hill, Selly Oak<br> Lagos, 105102 </h6>

				</div>  

			</div>     

		</div>   
		<div class="image-wrapper">
			<div class="image-block"></div>
		</div> 
	</div>
	<div id="message-wrapper">

		<div class="col-12 col-md-6" id="message-text">
					
			<h3>WHAT CAN

				<br>
			WE  DO FOR YOU?

			</h3>

			<h6>Send us a message</h6>

		</div>

		<div class="col-12 col-md-6" id="message-block">

			<form action="" method="POST" >
							
				<div class="form-container">

					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<p class="form-input col-6" style="display:inline-block"><input type="text" id="name" name="name" placeholder="Full name" required></p>
					<p class="form-input col-6" style="display:inline-block; float: left;"><input type="email" id="email" name="email" placeholder="Email" required></p>
					<p class="form-input"><input type="text" id="subject" name="subject" placeholder="Subject" required></p>
					<p class="form-input"><textarea  id="message" name="message" placeholder="Message" required></textarea></p>
					<input class="box-link inverse " type="submit" value="Submit">
							
				</div>
					
			</form>
						
			@if(session('status'))
						
			<div class ="inverse" id="message-sent">
				{{session('status')}}
			</div>

			@endif

		</div> 

	</div>
		 
</div>
		

@endsection