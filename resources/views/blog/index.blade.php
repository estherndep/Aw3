@extends('layouts.app')
@section('content')
	
	<div class="content inverse">
		<div id="post-container">
		<div class="blog-logo"><p>AWTO</p> <p>BLOG</p></div>
				<div class="post-catalog-body">
					<div class="inner row">
						@foreach($posts as $post)
							<div class="sngl-post">	
									<div class="sngl-post-img block-img">
									</div>
							</div>
						@endforeach
						</div>
				</div>
		</div>
	</div>

@endsection

