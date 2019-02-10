@foreach ($users->chunk(3) as $chunk)
            <div class="container mt-4 mb-4 p-4">
                <div class="row">
                    @foreach ($chunk as $user)
                    <div class="col-lg-4 col-md-4 col-sm-4 border">
                            <!--Prvi red za tri kolone-->
                            <div class="row border-bottom">
                                <div class="col-lg-12  small p-2" style="background-color:{{$user->color->color}} !important;">
                                <p class="text-white">{{$user->position}}</p>
                                </div>
                               
                            </div>
                            
                            <div class="row  shadow-two">
                                <div class="col-sm-5 text-center p-3" style="background-color:{{$user->color->color}} !important;">
                                    <a href="{{ url($user->id.'/user') }}"><img src="{{asset('/'.$user->image)}}" class="rounded-circle img-fluid slika_kruzic"/></a><br>

                                    @if (auth()->user()->following->contains($user->id))
                                        <i data-id="{{$user->id}}" class="fas fa-heart text-white text-center fa-2x andjela follow mt-2"></i>
                                    @else
                                    <i data-id="{{$user->id}}" class="fas fa-heart text-white text-center fa-2x andjela-no follow mt-2"></i>
                                    @endif
                                
                                </div>
                                <div class="col-sm-7 text-center p-3" style="background-color:{{$user->color->color}} !important;">
                                <a href="{{ url($user->id.'/user-following') }}" class="list-group-item list-group-item-action my-2">
                                
                                </i>Following <span class="badge badge-info following-{{$user->id}}">{{$user->followingNumber()}}</span>
                                </a>
                                <a href="{{ url($user->id.'/user-followers') }}" class="list-group-item list-group-item-action">
                                
                                </i>Followers <span class="badge badge-info followers-{{$user->id}}">{{$user->numberOfFollowers()}}</span>
                                 </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row p-3">
                                <div class="col-sm-9 text-left small shadow">
                                    <b class="text-secondary">First name:</b> <br>{{$user->first_name}} <br>
                                    <b class="text-secondary">Last name:</b> <br>{{$user->last_name}}<br>
                                    <b class="text-danger"><i class="fas fa-envelope" style="color:{{$user->color->color}}"></i></b> 
                                    <b class="text-danger">{{$user->email}}</b>
                                </div>

                                <div class="col-sm-2 text-left">
                                
                                </div>
                            </div>
                          
                    <hr class="star-light"></hr>
                            <!-- Drugi red za pet kolona-->
                            <div class="row small">
                            <div class="card-body bg-info text-white" style="background-color:{{$user->color->color}} !important">
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
                    @endforeach
                </div>
            </div>
        @endforeach


@section('js')
    <script src="{{asset('js/follow-ajax.js')}}"></script>
@endsection