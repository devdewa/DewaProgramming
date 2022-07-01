@extends('layouts.admin-auth.login-register')

@section('tittle')
<title> Login </title>
@endsection

@section('isi')
<div class="kiri">
</div>
      <div class="kanan">
         <div class="col-md-12 col-sm-12">
            <div class="login-form">
            <h1> Login </h1>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email..." required autocomplete="email" autofocus>
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password..." required autocomplete="current-password">
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="customControlValidation1">
                        <label class="custom-control-label" for="customControlValidation1">Show Password</label>
                    </div>
                    <script> 
                        function myFunction() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                        }
                    </script>
                </div>
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                <button type="submit" class="btn button">{{ __('Login') }}</button>
               </form>
            </div>
         </div>
      </div>
@endsection