@extends('layouts.app')
@section('content')
	
	<div class="content inverse">
		<div class="blog-logo"><p>AWTO</p> <p>BLOG</p></div>
		<div id="post-container">
			<div class="container">
				<div class="d-flex flex-row flex-wrap">
					@for ($i = 0; $i < 3; $i++)
						<div class="d-flex flex-column">
							<div class="blog-cont">
									@if($i%2==0)
										<div class="img-cont sm" style="background-image:url(/img/blog-2.jpg);"></div>
									@else
										<div class="img-cont bg" style="background-image:url(/img/blog-2.jpg);"></div>
									@endif
								<div class="blog-desc">
									<p class="meta">
										<span class="date">{{$posts[$i]->created_at}}</span>
									</p>
									<h5><a href="blog.html">{{$posts[$i]->title}}</a></h5>
									<p>A small river named Duden flows by their place and supplies it with the necessary </p>
								</div>
							</div>
							@for ($j = 3; $j < count($posts); $j+=3)
								@if($posts[$j+$i])
									<div class="blog-cont">
										@if(($j+$i)%2==0)
										<div class="img-cont sm" style="background-image:url(/img/blog-2.jpg);"></div>
										@else
										<div class="img-cont bg" style="background-image:url(/img/blog-2.jpg);"></div>
										@endif
										<div class="blog-desc"></div>
									</div>
								@endif
							@endfor
						</div>
					@endfor
				</div>
			</div>
		</div>
	</div>

@endsection

