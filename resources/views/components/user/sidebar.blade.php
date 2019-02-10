<div class="col-md-3">
    <div class="card blue-background shadow">
        <div class="card-header text-white">
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
            <a href="{{ url ('/edit-personal-information')}}" data-toggle="tooltip" data-placement="top" title="Edit account">
                <i class="fas fa-cogs fa-2x zoom"></i>
            </a>
            <a href="{{ url('/'.auth()->user()->id.'/user') }}" data-toggle="tooltip" data-placement="top" title="Manage resume">
                <i class="fas fa-briefcase fa-2x zoom"></i>
            </a>
            <a href="{{ url(auth()->user()->id.'/user-followers') }}" data-toggle="tooltip" data-placement="top" title="See followers">
                <i class="fas fa-user-plus fa-2x zoom"></i>
            </a>
            <a href="{{ url(auth()->user()->id.'/user-following') }}" data-toggle="tooltip" data-placement="top" title="You following">
                <i class="fas fa-user-friends fa-2x zoom"></i>
            </a>
            <a href=""><i class="fas fa-map-marker-alt fa-2x zoom"></i>
            
        </div>
        <div class="list-group">
            <a href="{{ url(auth()->user()->id.'/user-followers') }}" class="list-group-item list-group-item-action">
                Followers <span class="badge badge-info">{{auth()->user()->numberOfFollowers()}}</span>
            </a>
            <a href="{{ url(auth()->user()->id.'/user-following') }}" class="list-group-item list-group-item-action">
                Following <span class="badge badge-info">{{auth()->user()->followingNumber()}}</span>
            </a>
            <a href="{{ url ('/edit-personal-information')}}" class="list-group-item list-group-item-action">Manage your account</a>
            <a href="{{ url('/'.auth()->user()->id.'/user') }}" class="list-group-item list-group-item-action">Manage resume</a>
            <a href="{{ url('your-card-preview') }}"  class="list-group-item list-group-item-action">See your card</a>
        </div>

    </div>
   
    

    <!-- USER CARD START -->

    
    <!-- USER CARD END -->
</div>


@section('js')

    <script src="{{ asset('/js/show-user-card.js') }}"></script>

@endsection