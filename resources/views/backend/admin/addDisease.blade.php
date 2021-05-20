@extends('layouts.admin')
@section('content')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mb-5">
         <form action="Disease" enctype="multipart/form-data" method="post" class="p-5 bg-white">
          @csrf
          <h2 class="h4 col-auto mb-5">Create Disease</h2> 
      
             
            <div class="form-group row">
           
              <label for="name" class="col-md-4 col-form-label">Name</label>

              <input id="name"
                     type="text"
                     class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                     name="name"
                     value="{{ old('name') }}"
                     autocomplete="name" autofocus>

              @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
    
          
        
        <div class="form-group row">
           <label for="cause" class="col-md-4 col-form-label">Cause</label>
           <textarea name="cause" id="id" class="form-control{{ $errors->has('cause') ? ' is-invalid' : '' }}" ></textarea>

          @if ($errors->has('cause'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('cause') }}</strong>
              </span>
          @endif
      </div>

      <div class="form-group row">
        <label for="signs" class="col-md-4 col-form-label">Signs</label>
        <textarea name="signs" id="id" class="form-control{{ $errors->has('signs') ? ' is-invalid' : '' }}" ></textarea>

       @if ($errors->has('signs'))
           <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('signs') }}</strong>
           </span>
          @endif
          </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Image Body</label>

            <input type="file" class="form-control-file" id="image" name="image">

            @if ($errors->has('image'))
                <strong>{{ $errors->first('image') }}</strong>
            @endif
        </div>
          <div class="form-group row">
            <label for="type" class="col-md-4 col-form-label">Type</label>
                <select id="type"
                  type="text"
                  class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                  name="type"
                  value="{{ old('type') }}"
                  autocomplete="type" autofocus>
                  <option value="respiratory">Respiratory Disease </option>
                  <option value="cancer">Cancer Disease</option>
                  <option value="general">General Disease</option>
              </select>
    
           @if ($errors->has('type'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('type') }}</strong>
               </span>
           @endif
              </div>


              
      <div class="form-group row">
        <label for="treatement" class="col-md-4 col-form-label">Treatement</label>
        <textarea name="treatment" id="id" class="form-control{{ $errors->has('treatment') ? ' is-invalid' : '' }}" ></textarea>

       @if ($errors->has('treatement'))
           <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('treatment') }}</strong>
           </span>
          @endif
          </div>
              
            
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Add Disease" class="btn btn-success rounded-0 py-3 px-4">
              </div>
            </div>
          </form>
        </div>
       </div>
    </div>
  </div>
@endsection
