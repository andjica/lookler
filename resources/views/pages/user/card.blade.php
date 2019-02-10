@extends('layouts.template')

@section('content')

    <div class="container pt-5">
        <div class="row">
           <div class="col-md-12">
           <div class=" text-center">
                <h2 class="color-buble">Welcome to Lookler user settings</h2>
                <p class="lead">Welcome to user-settings, the Lookler tools will allow you to 
                    quickly and easily manage your data. Be unique and enjoy the Lookler Web site.
                </p>
         
            <br>
   
            <a href="{{ url ('/edit-personal-information')}}" data-toggle="tooltip" data-placement="top" title="Edit account">
                <i class="fas fa-cogs fa-2x zoom-2"></i>
            </a>
            <a href="{{ url('/'.auth()->user()->id.'/user') }}" data-toggle="tooltip" data-placement="top" title="Manage resume">
                <i class="fas fa-briefcase fa-2x zoom-2"></i>
            </a>
            <a href="{{ url(auth()->user()->id.'/user-followers') }}" data-toggle="tooltip" data-placement="top" title="See followers">
                <i class="fas fa-user-plus fa-2x zoom-2"></i>
            </a>
            <a href="{{ url(auth()->user()->id.'/user-following') }}" data-toggle="tooltip" data-placement="top" title="You following">
                <i class="fas fa-user-friends fa-2x zoom-2"></i>
            </a>
            <a href=""><i class="fas fa-map-marker-alt fa-2x zoom-2"></i>
                <hr>
            </div>
        
           </div>
        </div>
        <div class="row my-3">
           @include('components.user.sidebar')
          
          <!-- USER CARD START -->


          <div class="col-md-4 border ">
                            <!--Prvi red za tri kolone-->
                        
                            <div class="row">
                                
                                <!--Div za iconicu, tj user img -->
                                <div class="col-sm-5 bg-info text-center" style="background-color:{{$user->color->color}} !important;">
                               
                                <a href="{{ url($user->id.'/user') }}">
                                    <img src="{{asset('/'.$user->image)}}" class="rounded-circle img-fluid mt-4 slika_kruzic"/></a><br>
                                <b class="text-white small">{{$user->first_name}}</b>
                                @if (auth()->user()->following->contains($user->id))
                                    <i data-id="{{$user->id}}" class="fas fa-heart text-white text-center fa-2x andjela follow"></i>
                                @else
                                <i data-id="{{$user->id}}" class="fas fa-heart text-white text-center fa-2x andjela-no follow"></i>
                                @endif
                                </div>
                                <div class="col-sm-7">
                               
                                <a href="{{ url($user->id.'/user-following') }}" class="list-group-item list-group-item-action my-2">
                                
                                </i>Following <span class="badge badge-info following-{{$user->id}}">{{$user->followingNumber()}}</span>
                                </a>
                                <a href="{{ url($user->id.'/user-followers') }}" class="list-group-item list-group-item-action">
                                
                                </i>Followers<span class="badge badge-info followers-{{$user->id}}">{{$user->numberOfFollowers()}}</span>
                                 </a>
                                <hr class="star-light">
                                    <h4 class="small text-info">{{$user->position}}</h4>
                                    
                               
                                <!-- Div za ime prezime i informacije -->
                              
                                    <p class="small"><b class="text-secondary">First name:</b> <br>{{$user->first_name}} <br>
                                    <b class="text-secondary">Last name:</b> <br>{{$user->last_name}}<br>
                                    <b class="text-danger"><i class="fas fa-envelope text-primary"></i></b> <b class="text-danger">{{$user->email}}</b>
                                </div>
                               
                    
                               
                             
                    </div>
                    <hr class="star-light"></hr>
                            <!-- Drugi red za pet kolona-->
                            <div class="row small">
                            <div class="card-body bg-info text-white" style="background-color:{{$user->color->color}} !important; height:120px;">
                                    <p class="card-text">{{ $user->bio }}</p>
                                    <a href="{{ url($user->id.'/user') }}" class="btn blue-background btn-sm text-white">Read more</a>
                                </div>
                            <div class="card text-center text-white">
                                <div class="card-header  bg-dark">
                                <ul class="nav nav-tabs card-header-tabs justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link  text-white small" href="#">
                                            <i class="fas fa-globe-africa fa-2x"></i> <br>Feed
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="{{url ($user->id.'/user') }}">
                                            <i class="fas fa-signal fa-2x"></i><br>Resume
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="#"><i class="fas fa-folder fa-2x"></i><br>Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="#">
                                            <i class="fas fa-th-large fa-2x"></i><br>Channel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="#">
                                            <i class="fas fa-user fa-2x"></i><br>Network
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="#">
                                        <i class="fas fa-envelope fa-2x"></i><br>Message
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white small" href="#">
                                        <i class="fas fa-phone fa-2x"></i><br>
                                            Contact
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                                
                                </div>
                            </div>
                        </div>


      <!-- USER CARD END -->
        </div>
      

                </div>
           </div>
        </div>
    </div>
@endsection

