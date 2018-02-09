@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Hello, {{Auth::user()->name}}.</div>
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li ><a href="/user/">Home</a></li>
        <li class="active"><a href="/user/groups">My Group Activities</a></li>
        <li ><a href="/user/details">My Details</a></li>
        <li><a href="/user/notifications">My Notifications</a></li>
        <li><a href="/user/people">People</a></li>
        @if(Auth::user()->account_type == 1)
        <li><a href="/user/admin/">Admin Panel</a></li>
      @endif
      </ul>

      @if(Auth::user()->group == 0)
                                <h3 class="text-center">You do not belong to any group yet.</h3>
                              @else

                                  <div class="row">
                                      <div class="col-md-12">
                                        <br />
                                      {{--  GROUP COMMENT FORM  --}}
                                          <form class="form" method="POST" action="/user/groups">
                                           {{ csrf_field() }}
                                              <div class="form-group">
                                                  <label></label>
                                                  <textarea name="comment" placeholder="Say something..." rows="5" class="form-control"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <input class="btn btn-primary btn-md" style="width:200px" value="Post" type="submit" name="save">
                                              </div>
                                          </form>
                                          <hr/>
                                      {{--  END GROUP COMMENT FORM  --}}

                                      {{--  GROUP POSTS SECTION  --}}
                                          <div class="row">
                                            <div class="col-md-12">
                                            <?php if(count($posts) > 0): ?>

                                                    <div class="">
                                                        @foreach($posts as $post)

                                                            <h5><b>{{ $post->user->name }} </b></h5>
                                                            <h6><b>Posted On:</b> {{ $post->created_at->format('j-M-Y') }} - {{ $post->created_at->format('H:i') }} </h6>
                                                              <blockquote class=""><p>{{ $post->content }}</p></blockquote>
                                                          <hr />

                                                        @endforeach
                                                    </div>
                                                    <div class="text-center"> {{$posts->links()}} </div>
                                            <?php endif; ?>
                                            </div>
                                          </div>
                                      {{--  END GROUP POSTS SECTION  --}}

                                      </div>
                                  </div>
                                @endif

    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection
