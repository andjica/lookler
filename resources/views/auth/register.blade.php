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
            <h2 class="color-blue">Register here</h2>
        <form class="needs-validation" onsubmit="return form();" method="POST" action="{{asset('register')}}"novalidate>
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom01">First name</label>
            <input type="text" class="form-control form-input" id="validationCustom01" name="first_name" required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustom02">Last name</label>
            <input type="text" class="form-control form-input" id="validationCustom02" name="last_name"required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
            </div>
            </div>
           
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom01">Email Address</label>
            <input type="text" class="form-control form-input" id="email" name="email" required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
            </div>
           
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustom02">Phone number</label>
            <input type="text" class="form-control form-input" id="validationCustom02" name="phone" required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
            </div>
            </div>
           
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom01">Password</label>
            <input type="password" class="form-control form-input" id="pass" name="password" required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
               
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustom02">Confirm password</label>
            <input type="password" class="form-control form-input" id="pass2" name="password_confirmation" required>
            <div class="valid-feedback">
                <i class="fas fa-check text-success"></i>
            </div>
            </div>
           
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="invalidCheck" name="Terms and conditions" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
        </div>
        <center>
            <input class="btn btn-primary form-button" type="submit" value="Register">
        </center>
        </form>
            <div class="alert alert-danger" role="alert" id="div-reg" style="display:none;">
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <!-- Druga kolona za login -->
        <div class="col-lg-4 blue-background opacity p-5">
            <h2 class="text-white text-center">Already <br>Registered?</h2>
            <p class="text-white text-center mt-5">This is your opportunity <br>
                Get started - it's free.
            </p>
            <center>
               <a href="{{asset('/login')}}" class="btn button-white">LOGIN</a>
            </center>
        </div>
    </div>
</div>
<script>
function form(){
    
    
    var errors=[];
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;
    var pass2 = document.getElementById('pass2').value;
    
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    
    if(!email.match(regEmail)){
        errors.push("Email or username is in bad format");
    }
    
    if(pass.length < 6 || pass.length > 20){
        
        errors.push("The password must be at least 6 characters.");
    }


    var text = "";
    
    text = "<ul>";

    if(errors.length>0){
        
        for(var i=0; i<errors.length; i++){
            
            text += "<li>"+errors[i]+"</li>";
        }
        text+="</ul>";
        var div = document.getElementById('div-reg');
        div.style.display = 'block';
      
        div.innerHTML=text;
        
        return false;
    }
    else{
    
        return true;
    }
}
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

