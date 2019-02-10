@extends('layouts.templatebasic')

<div class="container p-3">

<div class="row mt-4">
    <div class="col-lg-12">
        <div class="col-lg-3 logo">
            <img src="{{asset('/')}}img/logo-gold.png" class="img-fluid">
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-8 bg-white p-3">
        <h2 class="color-blue">Login</h2>
    <form class="needs-validation" method="POST" action="{{asset('authenticate')}}"novalidate>
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
        <label for="validationCustom01">Email Address</label>
        <input type="text" class="form-control form-input" id="validationCustom01" name="email" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
        <div class="col-md-6 mb-3">
        <label for="validationCustom02">Password</label>
        <input type="password" class="form-control form-input" id="validationCustom02" name="password" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        </div>
       
        </div>
        
       
        <!-- <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
    </div> -->
    <center>
        <button class="btn btn-primary form-button" type="submit">Login</button>
    </center>
    
    <a href="{{asset('password/reset' )}}">Forgot my password</a>
    </form>

    @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
                @endif

                @if(!empty(session("Message")))

                    {{session('message')}}

                @endif

    </div>

    <!-- Druga kolona za login -->
    <div class="col-lg-4 blue-background opacity p-5">
        <h2 class="text-white text-center">Already <br>Registered?</h2>
        <p class="text-white text-center mt-5">This is your opportunity <br>
            Get started - it's free.
        </p>
        <center>
            <a class="btn button-white" href="{{asset('/register')}}">REGISTER</a>
        </center>
    </div>
</div>
</div>
