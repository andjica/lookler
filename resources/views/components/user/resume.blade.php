
<div class="card text-center">
  <div class="card-header blue-background">
    <ul class="nav nav-tabs card-header-tabs">
    <li class="nav-item">
        <a class="nav-link text-user" href="{{url($user->id.'/profile')}}"><i class="fas fa-user fa-2x"></i><br>User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-user" href="{{url($user->id.'/user')}}"><i class="fas fa-signal fa-2x"></i><br>Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-user" href="#"><i class="fas fa-briefcase fa-2x text-user"></i><br>Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-user" href="#"><i class="far fa-envelope text-user fa-2x"></i></i><br>Contact</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left">
              
                <!-- CARD-->
                <div class="card card-outline-secondary my-4">
                    <div class="card-header bg-user text-white">
                    <i class="fas fa-building fa-2x text-white"></i>Employment
                    
                    <hr class="" style="background:#F9F3EE">
                    </div>
                    <div class="card-body">
                          @can('update-profile')
                          <div class="edit-work" id="employment-form" style="display:none;">
                            <form method="POST" action="{{ url('edit-resume') }}">
                              @csrf
                            <div class="form-group">
                              <label for="firstname">Name of position</label>
                              <input type="text" class="form-control" id="firstname" name="company" aria-describedby="namehelp">
                            </div>
                          <div class="form-group">
                            <label for="comment">Short summary:</label>
                            <textarea class="form-control" rows="5" id="bio" name="description"></textarea>
                          </div>
                          <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="update">Send</button>
                        </form>
                      </div>
                        @include('components.errors')
                        </div>
                        @endcan
                        @foreach ($user->portfolios as $job)
                              <!--Start -->
                          <h4>{{$job->company}}</h4>
                          <p>{{$job->description}}</p>
                          <!--End -->
                        @endforeach
                          <hr>
                    </div>
                    <div class="card-header bg-white">
                        Education
                      <hr class="bg-warning">
                        @can('update-profile')
                        <div class="edit-work" id="education-form" style="display:none;">
                          <form method="POST" action="{{ url('edit-education') }}">
                            @csrf
                          <div class="form-group">
                            <label for="firstname">Name of school</label>
                            <input type="text" class="form-control" id="firstname" name="school" aria-describedby="namehelp">
                          </div>
                        <div class="form-group">
                          <label for="comment">Short summary:</label>
                          <textarea class="form-control" rows="5" id="bio" name="description"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="update">Send</button>
                        </div>
                      </form>
                        </div>
                      @endcan
                      @foreach($user->schools as $school)
                          <h4>{{$school->school}}</h4>
                          <p>{{$school->description}}</p>
                      @endforeach
                    <hr>
                    </div>
                </div>
               <!-- /.card -->
            </div>
            <!-- Categories Graphic and media -->
            <div class="col-md-4">
            <!-- Categories Programing -->
              <div class="card my-4">


           <!-- DUGMICI ZA PRIKAZ FORMI START -->
              <button class="btn btn-info btn-lg btn-block" style="width:100%;" id="show-employment">Add employment info <i class="fas fa-plus"></i></button>
              <button class="btn btn-info btn-lg btn-block" style="width:100%;" id="show-education">Add education info <i class="fas fa-plus"></i></button>
             <!-- DUGMICI ZA PRIKAZ FORME KRAJ -->
              <hr>

                @include('components.user.sidebar-skills')
              </div>
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header small">{{$user->full_name()}} - {{$user->position}}</h5>
                    <div class="card-body">
                    <a href="{{ url('download-pdf') }}" class="btn btn-info">Download as pdf</a>
                    </div>
                </div>
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