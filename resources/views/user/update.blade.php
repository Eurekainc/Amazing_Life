@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-10 col-md-offset-1">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Hello, {{Auth::user()->name}}.</div>
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li ><a href="/user/">Home</a></li>
        <li ><a href="/user/groups">My Group Activities</a></li>
        <li class="active"><a href="/user/details">My Details</a></li>
        <li><a href="/user/notifications">My Notifications</a></li>
        <li><a href="/user/people">People</a></li>
        @if(Auth::user()->account_type == 1)
        <li><a href="/user/admin/">Admin Panel</a></li>
      @endif
      </ul>
      <br />
<h4 class="text-center">Update Your Details</h4>
        <br />

    <form class="form" method="POST" action="/user/details/{{ Auth::user()->id}}">

      {{ method_field("PUT") }}
      {{ csrf_field() }}

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control" placeholder=""/>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Phone Number:</label>
            <input type="text" name="phone" value="{{ Auth::user()->phone}}" class="form-control" placeholder=""/>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Home Address:</label>
            <input type="text" name="home_address" value="{{ Auth::user()->home_address}}" class="form-control" placeholder=""/>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Email Address:</label>
            <input type="text" name="email" value="{{ Auth::user()->email}}" class="form-control" placeholder=""/>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label></label>
              <button type="submit" name="update"  class="btn btn-md btn-block btn-primary">Save Changes</button>
          </div>
        </div>

      </div>
    </form>

    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection
