<div class="card text-center">
  <div class="card-header blue-background">
    <ul class="nav nav-tabs card-header-tabs">
    <li class="nav-item">
        <a class="nav-link active text-user" href="{{ url($user->id.'/profile')}}"><i class="fas fa-user fa-2x"></i><br>User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-user" href="{{url ($user->id.'/user')}}"><i class="fas fa-signal fa-2x text-user"></i><br>Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-user" href="#"><i class="fas fa-briefcase fa-2x text-user"></i><br>Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-user" href="#"><i class="far fa-envelope fa-2x text-user"></i></i><br>Contact</a>
      </li>
      
    </ul>
  </div>
  <div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
            
            <div class="card bg-light" style="">
                <div class="row">
                    <div class="col-md-7 pl-4">
                      <div class="row">
                        <div class="col-md-10">
                          <ul class="list-group small mt-3">
                          <li class="list-group-item disabled"><b> <p class="card-text">{{$user->bio}}</p></b></li>
                              <li class="list-group-item disabled"><b>{{$user->position}}</b></li>
                              <li class="list-group-item"><b>First name:</b> <br>{{$user->first_name}}</li>
                              <li class="list-group-item"><b>Last name:</b> <br>{{$user->last_name}}</li>
                              <li class="list-group-item"><b>E-mail:</b><br>{{$user->email}}</li>
                          </ul>
                        </div>
                        <div class="col-md-2">
                        <div class="card-body">
                            <img class="card-img-top rounded shadow" src="{{asset('/'.$user->image)}}" alt="Card image cap" style="width:220px; height:200px;">
                            <A href="{{asset('/test')}}" class="btn btn-warning my-4 text-white"><i class="fas fa-file-download"></i>&nbsp;Download CV</a>

                          </div>
                 
                        </div>
                        <hr>
                        
                      </div>
                  </div>
                 
                  <!-- BIOGRAFIJA -->
                </div>
                <br>
                    <hr>
                
                <div class="card bg-white text-center p-3 my-3">
                    <blockquote class="blockquote mb-0">
                    <h5>Address:Paris,France 153</h5>
                    <div class="container-fluid">
                        <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                    <footer class="blockquote-footer">
                        <small>
                        Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                    </blockquote>
                </div>
               
            
            </div>
            
          <!-- Categories Programing -->
  
          

        </div>
        <div class="col-md-6">
                      @include('components.user.sidebar-skills')
                  
                
          </div>
            </div>
        </div>
    </div>
                      </div>
    @section('js')
  <script src="{{asset('js/jobs-form.js')}}"></script>
@endsection
@section('css')
<link href="{{asset('/')}}css/adding-jobs.css" rel="stylesheet">
@endsection