@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="panel panel-default">
		    <div class="panel-heading text-center">
		    	<h3>{{$article->title}}</h3>
		    </div>
		    <div class="panel-body">
		    	<div class="container">{{$article->content}}</div> 
		    	<br />
		    	@guest

		    	@else
			    	<div class="col-md-2"></div>
			    	<div class="col-md-8">
			    		<form class="form  text-center offset-3" method="POST" action="#">
	                          <div class="col-sm-12">
	                              <br>
	                              <textarea class="form-control" name="comment" rows="7" type="t" placeholder="Write your comment here..."></textarea>
	                              <br>
	                          </div>
	                          <div class="col-sm-12">
	                              <input type="submit" class="btn btn-default" value="Comment" name="submit">
	                          </div>
	                 </form>
			    	</div>
			    	 
	                 <div class="col-md-2"></div>
                 @endguest

		    </div>

		    <div class="panel-footer">
		    	<a href="/articles/" class="btn btn-default">Back</a>
		    </div>
  		</div>

	</div>

@endsection