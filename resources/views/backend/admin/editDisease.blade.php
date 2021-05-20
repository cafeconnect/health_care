@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row-md-12">
       
    <div class="card-body">
      <form action="updateDisease{{ $raw->id }}" enctype="multipart/form-data" method="post" class="p-5 bg-white">
       <div class="row text-center">
        <h4>Edit Disease</h4> 
        </div>
    {{ csrf_field() }}
    {{ method_field('PUT') }}
     <div class="form-group row">
    
       <label for="name" class="col-md-4 col-form-label">Name</label>

       <input id="name"
              type="text"
              class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
              name="name"
              value="{{$raw->name}}"
             autocomplete="name" autofocus>

       @if ($errors->has('name'))
           <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('name') }}</strong>
           </span>
       @endif
   </div>

   <div class="form-group row">
       <label for="cause" class="col-md-4 col-form-label">Cause</label>
       <textarea name="cause" id="id" 
        value="{{$raw->cause}}" 
        class="form-control{{ $errors->has('cause') ? ' is-invalid' : '' }}" ></textarea>

       @if ($errors->has('cause'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('cause') }}</strong>
         </span>
     @endif
 </div>

 <div class="row">
     <label for="image" class="col-md-4 col-form-label">Image Body</label>

     <input type="file"
            id="image" 
            class="form-control-file" 
            name="image">
       

     @if ($errors->has('image'))
         <strong>{{ $errors->first('image') }}</strong>
     @endif
 </div>

 <div class="form-group row">
    
     <label for="signs" class="col-md-4 col-form-label">Signs</label>

 <textarea name="signs" id="id"  value="{{$raw->signs}}" class="form-control{{ $errors->has('signs') ? ' is-invalid' : '' }}" ></textarea>

     @if ($errors->has('signs'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('signs') }}</strong>
         </span>
     @endif
 </div>
     

 <div class="form-group row">
    
    <label for="type" class="col-md-4 col-form-label">Type</label>
    <select id="type"
    type="text"
    class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
    name="type"
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
    
    <label for="treatment" class="col-md-4 col-form-label">Treatement</label>

    <textarea name="treatment" id="id" 
    value="{{$raw->treatment}}" 
    class="form-control{{ $errors->has('treatment') ? ' is-invalid' : '' }}" ></textarea>

    @if ($errors->has('treatment'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('treatment') }}</strong>
        </span>
    @endif
</div>
    
        <button class="btn btn-secondary" type="button">Cancel</button>
        <button type="submit" class="btn btn-primary mx-5">Update</button>
  </div>
  </form>
    </div>
  </div>
</div>


@endsection
