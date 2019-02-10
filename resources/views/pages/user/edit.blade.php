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
           <div class="col-md-8">
             <div class="card  p-3 bg-user">
           <form action="{{ url('/edit-information') }}" method="POST" enctype='multipart/form-data' class="blue-background text-white p-3 rounded">
           @csrf
           <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" class="form-control" id="firstname" name="first_name" aria-describedby="namehelp" value="{{ auth()->user()->first_name }}">
              </div>
              <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" class="form-control" id="lastname" name="last_name" aria-describedby="lasthelp" value="{{ auth()->user()->last_name }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ auth()->user()->email }}">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phonehelp" name="phone" value="{{ auth()->user()->phone }}">
              </div>
              <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" id="avatar" aria-describedby="avatarhelp" name="image">
              </div>
              <div class="form-group">
                <label for="avatar">Job position information</label>
                <input type="text" class="form-control" id="job" name="position" aria-describedby="jobhelp" name="job" value="{{ auth()->user()->job }}">
              </div>
              <div class="form-group">
                  <label for="comment">Short bio:</label>
                  <textarea class="form-control" rows="5" id="bio" name="bio"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Profile color</label>
                
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Choose color profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-info" id="exampleModalLongTitle">Colors palette</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                          @foreach ($colors as $color)
                            <input class="form-check-input" type="radio" name="color_id" id="color-{{$color->id}}" value="{{$color->id}}" style="display:none;">
                            <label class="form-check-label" for="color-{{$color->id}}">
                              <i class="fas fa-circle zoom-2" style="color:{{$color->color}}; font-size:60px;"></i>
                            </label>
                          @endforeach


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="close-color" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <button type="submit" class="btn btn-primary" name="update">Update information</button>
            </form>
          </div>
@include('components.errors')
        </div>
</div>

                </div>
           </div>
        </div>
    </div>
@endsection

@section('js')

<script src="{{asset('js/change-color-close-modal.js')}}"></script>

@endsection
