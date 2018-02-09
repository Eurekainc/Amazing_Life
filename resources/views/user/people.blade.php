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
        <li ><a href="/user/details">My Details</a></li>
        <li><a href="/user/notifications">My Notifications</a></li>
        <li class="active"><a href="/user/people">People</a></li>
        @if(Auth::user()->account_type == 1)
        <li><a href="/user/admin/">Admin Panel</a></li>
      @endif
      </ul>

      <br />
      <?php if(count($people) > 0): ?>
          @foreach($people as $person)
              <div class="row">   
                  @if($person->gender == 'Female')
                      <div class="col-md-2">
                          <img src="{{asset('images/female_avatar.png')}}" width="70%" height="80px" alt="profile" class="img-circle">
                      </div>
                  @else
                      <div class="col-md-2">
                          <img src="{{asset('images/male_avatar.png')}}" width="70%" height="80px" alt="profile" class="img-circle">
                      </div>
                  @endif
                      <div class="col-md-10">
                          <div class="">
                            <h4>{{ $person->name}}</h4>
                            <small><i class="fa fa-address-card-o" aria-hidden="true"></i> {{ $person->home_address }} </small><br />
                            <small><i class="fa fa-neuter" aria-hidden="true"></i> {{ $person->gender }}</small>
                          </div>
                      </div>

              </div>
              <hr />
              <br />
          @endforeach
          <div class="text-center"> {{$people->links()}} </div>
          <?php endif; ?>
 
    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection