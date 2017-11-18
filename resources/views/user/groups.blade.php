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
      </ul>

      @if(Auth::user()->group == 0)
                                <h3 class="text-center">You do not belong to any group yet.</h3>
                              @else
                                  <div class="row">
                                      <div class="col-md-12">
                                        <br />
                                          <form class="form">
                                              <div class="form-group">
                                                  <label></label>
                                                  <textarea name="comment" placeholder="Say something..." rows="5" class="form-control"></textarea>
                                              </div>
                                              <div class="form-group">
                                                <input class="btn btn-primary btn-md" value="Comment" type="submit" name="comment">
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                @endif
      
    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection