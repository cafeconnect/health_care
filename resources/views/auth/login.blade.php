@extends('layouts.master')
@section('content')
<div class="site-section bg-light" id="contact-section">
<div class="container">
    <div class="card-body">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('login') }}">
                   @csrf
                   <div class="raw text-center">
                   <h5>SIGN IN </h5>
                   </div>
                   <div class="raw" >
                    <label class="control-label" for="username">Email</label>
                       <input id="email" 
                       type="email" 
                       class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" 
                        autocomplete="email" autofocus
                        placeholder="Email">
                    </div>
                 
   
                   <div class="raw">
                    <label class="control-label" for="password">Password</label>
                       <input id="password" 
                       type="password" 
                       class="form-control @error('password') is-invalid @enderror"
                        name="password" 
                        autocomplete="current-password">
                    </div>

                       <div class="checkbox login-checkbox">
                            <label>
                             <input type="checkbox" class="i-checks"> Remember me </label>
                        </div>
                      @if (Route::has('password.request'))
                        <a class="btn btn-link" href="#">
                            {{ __('Forgot Password?') }}
                            </a>
                        @endif
                        <button class="btn btn-primary btn-block loginbtn" >Sign in</button>
                      
                        <a class="btn btn-default btn-block" href="register">Sign up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
    