@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">Hello, {{Auth::user()->name}}.</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Home</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu1">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                My Group Activities</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu2">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                My Details</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu3">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                My Notifications
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu4">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    People
                                </a>
                            </li>
                        </ul>

                        <!-- content -->
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                        <div class="row"><br/>
                                            
                                            @if(!empty(Auth::user()->photo))
                                                <div class="col-md-3">
                                                    <img src="{{asset('images')}}/{{Auth::user()->photo}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>

                                            @elseif(!(Auth::user()->photo))

                                                @if(Auth::user()->gender == 'Female')
                                                <div class="col-md-3">
                                                    <img src="{{asset('images/female_avatar.png')}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>
                                                @else
                                                    <div class="col-md-3">
                                                    <img src="{{asset('images/male_avatar.png')}}" width="100%" height="195px" alt="profile" class="img-circle">
                                                </div>
                                                @endif

                                            @endif
                                            <div class="col-md-9">
                                              <div class="text-center">
                                                <h1>{{ Auth::user()->name }}</h1>
                                                <h4>Department: Not Assigned yet</h4>
                                                <h4>Group: Not Assigned yet</h4>
                                                <h4>Account status: Not approved yet.</h4>
                                              </div>
                                            </div>
                                        </div>
                            </div>

                            <div id="menu1" class="tab-pane fade">
                              <!-- <br />
                                <h3 class="text-center">You do not belong to a group yet.</h3>
                              <br /> -->
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

                            <div id="menu2" class="tab-pane fade">
                              <br />
                                <a href="" class="btn btn-primary btn-md">Update Details</a>
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
                             <div id="menu3" class="tab-pane fade">
                                <div class="w3-container">

                                <br />
                                    <h1 class="text-center">You do not have any notifications.</h1>

                                </div>
                            </div>

                            <div id="menu4" class="tab-pane fade">
                                <div class="w3-container">
                                    <h1 class="text-center">People</h1>

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
                                        {{$people->links()}}
                                    <?php endif; ?>

                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
