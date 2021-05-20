@extends('layouts.master')
@section('content')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mb-5">
          <form action="contactPost" enctype="multipart/form-data" method="post" class="p-5 bg-white">
            @csrf 
          <h2 class="h4 text-black mb-5">Contact Us</h2> 

          <div class="raw">
            <label for="name" class="col-md-4 col-form-label">Name</label>
            <input id="name"
						type="text"
						class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
						name="name">
					   
          @if ($errors->has('name'))
           <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('name') }}</strong>
           </span>
         @endif
        </div>

        <div class="raw">
          <label for="email" class="col-md-4 col-form-label">Email</label>
          <input id="email"
						type="text"
						class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
						name="email">
					   
        @if ($errors->has('email'))
         <span class="invalid-feedback" role="alert">
           <strong>{{ $errors->first('email') }}</strong>
         </span>
       @endif
      </div>

      <div class="raw">
        <label for="phone" class="col-md-4 col-form-label">Phone</label>
        <input id="phone"
						type="text"
						class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
						name="phone">
					   
      @if ($errors->has('phone'))
       <span class="invalid-feedback" role="alert">
         <strong>{{ $errors->first('phone') }}</strong>
       </span>
     @endif
    </div>
    <div class="raw">
      <label for="message" class="col-md-4 col-form-label">Message</label>
      <textarea name="message" id="id" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" ></textarea>
    @if ($errors->has('message'))
     <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('message') }}</strong>
     </span>
     @endif
    </div>
    <button class="btn btn-primary btn-block loginbtn">Ping Us</button>
    </form>
    </div>
    </div>
  </div>
</div>

@endsection
