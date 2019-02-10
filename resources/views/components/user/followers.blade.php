<div class="col-md-9">
<div class="my-3 p-3 bg-white rounded  shadow">
 
        @foreach($following as $user)
     
          <div class="media text-muted pt-3">
            <img src="{{asset('/'.$user->image)}}" alt="" class="mr-2 rounded" style="width:150px;">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">
              <a href="{{ url($user->id.'/profile') }}">{{$user->full_name()}}</a><br>
              {{$user->email}}<br>
              {{$user->position}}
              </strong>
              {{$user->bio}}
            </p><br>
            <hr>
        
          </div>
        @endforeach
      </div>
</div>