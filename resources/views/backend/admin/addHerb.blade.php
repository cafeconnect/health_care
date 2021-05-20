@extends('layouts.admin')
@section('content')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 mb-5">
         <form action="herb" enctype="multipart/form-data" method="post" class="p-5 bg-white">
          @csrf
          <h2 class="h4 col-auto mb-5">Create Herb</h2> 
      
             
            <div class="form-group row">
           
              <label for="lname" class="col-md-4 col-form-label">Local name</label>

              <input id="lname"
                     type="text"
                     class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}"
                     name="lname"
                     value="{{ old('lname') }}"
                     autocomplete="lname" autofocus>

              @if ($errors->has('lname'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('lname') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group row">
           
            <label for="sname" class="col-md-4 col-form-label">Scientific Name</label>

            <input id="sname"
                   type="text"
                   class="form-control{{ $errors->has('sname') ? ' is-invalid' : '' }}"
                   name="sname"
                   value="{{ old('sname') }}"
                   autocomplete="sname" autofocus>

            @if ($errors->has('sname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sname') }}</strong>
                </span>
            @endif
        </div>

        

        <div class="form-group row">
           
            <label for="description" class="col-md-4 col-form-label">Description</label>

            <textarea name="description" id="id" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" ></textarea>

            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Image</label>

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
                  <option value="raw">Raw Herb</option>
                  <option value="product">Product</option>
                  <option value="general">General Herb</option>
              </select>
    
           @if ($errors->has('type'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('type') }}</strong>
               </span>
           @endif
              </div>
             
       <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Add Herb" class="btn btn-success rounded-0 py-3 px-4">
              </div>
            </div>
          </form>
        </div>
       </div>
    </div>
  </div>
@endsection
