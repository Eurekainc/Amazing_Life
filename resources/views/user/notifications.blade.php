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
        <li class="active"><a href="/user/notifications">My Notifications</a></li>
        <li ><a href="/user/people">People</a></li>
        @if(Auth::user()->account_type == 1)
        <li><a href="/user/admin/">Admin Panel</a></li>
      @endif
      </ul>

      <h1>Hail groups</h1>
      
    </div>
    <div class="panel-footer"></div>
  </div>
  <div class="col-md-10 col-md-offset-1">
</div>
@endsection