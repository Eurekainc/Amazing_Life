@extends('layouts.app')
@section('content')

<div class="container">
<div class="row"> 
	@if(count($articles) > 0)
		@foreach($articles as $article)
			<div class="col-md-4 off-set-3">
				<div class="panel panel-default">
				  <div class="panel-heading text-center">{{ $article->title }}</div>
					  <div class="panel-body">{{ $article->content }}</div>
						  <div class="panel-footer">
						  	<a href="/articles/{{$article->id}}" class="w3-btn w3-purple w3-round w3-ssmall">
						  		Read More
						  	</a>
						  </div>
				</div>
			</div>
		@endforeach
	@endif
</div>
</div>
@endsection