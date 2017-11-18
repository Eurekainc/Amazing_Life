@extends('layouts.app')
@section('content')
<div class="container">
	<div class="panel panel-default">
	<img src="{{asset('images/eiffel.jpg')}}" alt="test" width="100%" height="350px">
			<div class="panel-body">
				<div class="container-fluid">
				<div class="row">
					<div class="page-header ">
						<h4>Featured Articles</h4>
					</div>

					@if(count($featuredArticles) > 0 )
						@foreach($featuredArticles as $article)
							
								<div class="col-md-3">
									<a href="articles/{{$article->id}}"><h3 class="text-center">{{$article->title}}</h3></a>
									<img src="{{asset('images/eiffel.jpg')}}" class="img-thumbnail" alt="test" width="100%" height="250px">
									<br /> <br />
								</div>
							
						@endforeach
					@else
						<h1 class="text-center">There are no featured Articles. <i class="fa fa-frown-o" aria-hidden="true"></i></h1>
					@endif

				</div>

				<div class="row">
					<div class="page-header">
						<h4>Featured Videos</h4>
					</div>

					@if(count($featuredVideos) > 0 )
						@foreach($featuredVideos as $video)
							
								<div class="col-md-3">
									<a href="articles/{{$video->id}}"><h3 class="text-center">{{$video->title}}</h3></a>
									<img src="{{asset('videos/eiffel.jpg')}}" class="img-thumbnail" alt="test" width="100%" height="250px">
									<br /> <br />
								</div>
							
						@endforeach
					@else
						<h1 class="text-center">There are no featured Videos. <i class="fa fa-file-video-o" aria-hidden="true"></i></h1>
					@endif
					
				</div>

				<div class="row">
					<div class="page-header">
						<h4>Upcoming Events</h4>
					</div>
					@if(count($events) > 0 )
						@foreach($events as $event)
							
								<div class="col-md-3">
									<a href="articles/{{$event->id}}"><h3 class="text-center">{{$event->title}}</h3></a>
									<img src="{{asset('images/eiffel.jpg')}}" class="img-thumbnail" alt="test" width="100%" height="250px">
									<br /> <br />
								</div>
							
						@endforeach
					@else
						<h1 class="text-center">There are no events. <i class="fa fa-frown-o" aria-hidden="true"></i></h1>
					@endif
				</div>
					
				</div>
			</div>
			<div class="panel-footer text-center">
				Follow us on:
				<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a> 

				<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>

				<a href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a>
			</div>
	</div>
</div>
@endsection