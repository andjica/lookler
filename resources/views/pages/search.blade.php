@extends('layouts.template')

@section('content')

    <div class="container pt-5">
        <div class="row">
           <div class="col-md-12">
           <div class=" text-center">
                <p class="lead">Results for: {{$keywords}}</p>
                <h1>People</h1>

                <div class="row">
                @foreach ($users as $user)

                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('/'.$user->image) }}" alt="User image">
                  <div class="card-body">
                    <h5 class="card-title">{{$user->full_name()}}</h5>
                    <p class="card-text">{{$user->position}}</p>
                    <p class="card-text">{{$user->bio}}</p>
                    <a href="{{ url('/'.$user->id.'/user') }}" class="btn btn-primary">View profile</a>
                  </div>
                </div>

                @endforeach
                </div>

                
                <hr>

                <h1>Jobs:</h1>

                @foreach ($skills as $skill)

                  <a href="">{{ $skill->skill }} </a></br>

                @endforeach
            </div>
        
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
