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
           @include('components.user.content1')
        </div>
      

                </div>
           </div>
        </div>
    </div>
@endsection

