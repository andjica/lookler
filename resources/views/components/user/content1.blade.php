<div class="col-md-9">
<div class="row pb-3 pr-3 bl-3">
               

 <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="{{asset('/')}}img/friends.jpeg" style="width:350px; height:250px;" alt="">
            <div class="overlay my-4">
                <h2>See your followers</h2>
				<p>
					<a href="{{ url(auth()->user()->id.'/user-followers') }}" class="hovereffect-text">Click here</a>
				</p>
            </div>
    </div>
</div>
<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="{{asset('/')}}img/account.jpeg" style="width:350px; height:250px;" alt="">
            <div class="overlay my-4">
                <h2 class="text-white">Manage your account</h2>
				<p>
					<a href="{{ url ('/edit-personal-information')}}" class="hovereffect-text">Click here</a>
				</p>
            </div>
    </div>
</div>
    

</div>
<div class="row pb-3 pr-3 bl-3">
               

 <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="{{asset('/')}}img/portfolio.jpeg" style="width:350px; height:250px;" alt="">
            <div class="overlay my-4">
                <h2 class="text-white">Manage resume</h2>
				<p>
					<a href="{{ url('/'.auth()->user()->id.'/user') }}" class="hovereffect-text">Click here</a>
				</p>
            </div>
    </div>
</div>
<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="{{asset('/')}}img/location.jpeg" style="width:350px; height:250px;" alt="">
            <div class="overlay my-4">
                <h2 class="text-white">Manage your location</h2>
				<p>
					<a href="#" class="hovereffect-text">Click here</a>
				</p>
            </div>
    </div>
</div>
    

</div>
</div>