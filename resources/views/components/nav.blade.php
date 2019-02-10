<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color:#214D5C;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand text-white" href="{{ url('/') }}"><img src="{{asset('/')}}img/logo-gold.png" class="img-fluid" style="width:100px;"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
      <li class="nav-item active">
        <a class="nav-link text-white small" href="#">News <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="#">Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="#">Company</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="#">Channels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white small" href="#">More</a>
      </li>
      <li class="nav-item ml-2">
                <div class="justify-content-md-center">
                    <form class="form-inline my-5 my-lg-0" method="POST" action="{{ url('/search') }}">
                                @csrf
                      <div class="input-group">
                          <input type="text" class="form-control" name='search' aria-label="Text input with segmented dropdown button">
                          <div class="input-group-append">
                          <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                          <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" style="width:500px;">People</a>
                            <a class="dropdown-item" href="#">Company</a>
                            <a class="dropdown-item" href="#">Students</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                          </div>
                        </div>
                     
                    </form>
                </div>
     </li>
     <li class="nav-item">
        <a class="nav-link text-white" href="{{asset('/')}}"><i class="fa fa-home text-white"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><i class="fa fa-bell text-white"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{asset('/user-settings')}}" data-toggle="tooltip" data-placement="top" title="User settings"><i class="fa fa-cog text-white"></i></a>
      </li>
                           
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href=""
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
          
            </a>
          
          @if(auth()->check())
          <form id="logout-form" action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-info ml-3">Logout</button>
          </form>
          @else
            <a href="{{asset('register')}}">Register</a>
          @endif
    </ul>
  
     
  </div>
</nav>
