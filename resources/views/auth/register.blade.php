@extends('layouts.master')
@section('content')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-6">
           <form method="POST" action="{{ route('register') }}">
                 @csrf
                 <div class="raw text-center">
                    <h5>SIGN UP </h5>
                    </div>
                       <div class="raw">
                        <label class="control-label" for="username">UserName</label>
                        <input id="name" 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{ old('name') }}" 
                        required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                    <div class="raw pt-4">
                        <label class="control-label" for="email">Email</label>
                            <input id="email"
                             type="email" 
                             class="form-control @error('email') is-invalid @enderror" 
                             name="email" value="{{ old('email') }}" 
                             required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="raw">
                            <label class="control-label" for="password">Password</label>
                            <input id="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            name="password" 
                            required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                     
       
                       <div class="raw">
                        <label class="control-label" for="password-confirm">Repeat Password</label>
                        <input id="password-confirm"
                             type="password" class="form-control" 
                             name="password_confirmation" 
                             required autocomplete="new-password">
                        </div>
                        <button class="btn btn-primary btn-block loginbtn">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
