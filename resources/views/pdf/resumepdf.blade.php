@extends('layouts.template')

@section('appendCss')
  <link href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}css/form.css" rel="stylesheet">
@endsection

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header text-white blue-background">
            <img src="{{asset('/'.auth()->user()->image)}}" style="width:72px; height:72px;" class="rounded-circle"><br>
            {{auth()->user()->full_name()}}
            <i class="far fa-address-card text-warning fa-2x m-2" color="{{auth()->user()->color->color}}"></i>
            <hr class="bg-white">
            <h4 class="small text-info">{{auth()->user()->job}}</h4>
                
           
            <!-- Div za ime prezime i informacije -->
            <p class="small"><b class="text-user">First name:</b> {{auth()->user()->first_name}} <br>
            <b class="text-user">Last name:</b> {{auth()->user()->last_name}}<br>
            <b class="text-danger"><i class="fas fa-envelope-square text-info"></i></b> <b class="text-warning">{{auth()->user()->email}}</b>
            <br>
            <a href=""><i class="fas fa-map-marker-alt fa-2x zoom"></i>
            
        </div>

    </div>
    

</div>

</div>
    <div class="row">
        <div class="col-md-12">
        <hr>
        <h4 class="mt-4">{{auth()->user()->full_name()}}</h4>
        <p class="lead">
        {{auth()->user()->position}}<br>
        
        
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
        @foreach (auth()->user()->portfolios as $job)
                                Employement
                                <hr class="bg-warning">
                                <h4>{{$job->company}}</h4>
                                <p>{{$job->description}}</p>
                                <!--End -->
                                @endforeach
                                <hr>
                                Education
                            <hr class="bg-warning">
                            @foreach(auth()->user()->schools as $school)
                                <h4>{{$school->school}}</h4>
                                <p>{{$school->description}}</p>
                            @endforeach
                            <hr>
        </div>
    </div>  
            <!-- Categories Graphic and media -->
        <div class="row">
            <div class="col-md-12">
            <!-- Categories Programing -->
                
                <div class="card">
                    <h5 class="card-header bg-user text-white">Skills</h5>
                    
                    <table class="table">
                        <thead class="thead-light text-white">
                        <tr>
                            <th scope="col">Program</th>
                            <th scope="col"></th>
                            <th scope="col">Rate</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody id="skill-render">
                        @foreach(auth()->user()->skills as $skill)
                        <tr>
                            <th scope="row">{{$skill->skill}}</th>
                            <td><i class="fas fa-arrows-alt-h text-warning"></i></td>
                            <td>{{$skill->pivot->rating}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
              </div>
        <!-- Side Widget -->
             
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="card my-4">
                    <h5 class="card-header small">{{auth()->user()->full_name()}} - {{auth()->user()->position}}</h5>
                </div>
</div>
</div>
</div>

@endsection