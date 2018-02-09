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
      <a href="/user/details/{{Auth::user()->id}}/edit" class="btn btn-primary btn-md">Update Details</a>
                                <br />
                                <table class="table">
                                    <thead>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Name:</b></td>
                                            <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact Number:</b></td>
                                            <td>{{Auth::user()->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Home Address:</b></td>
                                            <td>
                                                @if(!empty(Auth::user()->home_address))
                                                 {{Auth::user()->home_address}}
                                                @else
                                                 <div class="w3-text-red">home address not set.</div>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Email Address:</b></td>
                                            <td>
                                                @if(!empty(Auth::user()->email))
                                                 {{Auth::user()->email}}
                                                @else
                                                 <div class="w3-text-red">email address not set.</div>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Department:</b></td>
                                            <td>

                                                <?php if(count($department) >= 1): ?>
                                                    {{ $department->department }}
                                                <?php else: ?>
                                                    <div class="w3-text-red">
                                                    You have not been assigned to a department yet.
                                                    </div>   
                                                <?php endif; ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Group:</b></td>
                                            <td>
                                                <?php if(count($group) >= 1): ?>
                                                    {{ $group->group }}
                                                <?php else: ?>
                                                    <div class="w3-text-red">
                                                    You have not been assigned to a group yet.
                                                    </div>   
                                                <?php endif; ?>

                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</div>
@endsection