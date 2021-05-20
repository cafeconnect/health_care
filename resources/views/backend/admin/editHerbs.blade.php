@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row col-md-12">
        <div class="card-body">
            <form action="updateHerb{{ $raw->id }}" enctype="multipart/form-data" method="post" class="p-5 bg-white">
                <h4>Edit Herb</h4>
                {{ csrf_field() }}
    {{ method_field('PUT') }}
     <div class="form-group row">
         <label for="lname" class="col-md-4 col-form-label">Local name</label>
         <input id="lname"
              type="text"
              class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}"
              name="lname"
              value="{{$raw->lname}}"
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
            value="{{$raw->sname}}"
            autocomplete="sname" autofocus>
     @if ($errors->has('sname'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('sname') }}</strong>
         </span>
     @endif
 </div>

 <div class="row">
     <label for="image" class="col-md-4 col-form-label">Image</label>

     <input type="file"
            id="image" 
            class="form-control-file" 
            name="image">
       

     @if ($errors->has('image'))
         <strong>{{ $errors->first('image') }}</strong>
     @endif
 </div>

 <div class="form-group row">
     <label for="description" class="col-md-4 col-form-label">Description</label>
     <textarea name="description"
      value="{{$raw->description}}"
      id="id" 
      class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" >
     </textarea>
   @if ($errors->has('description'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('description') }}</strong>
         </span>
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
    
        <button class="btn btn-secondary" type="button">Cancel</button>
        <button type="submit" class="btn btn-primary mx-5">Update</button>
  </div>
  </form>

        </div>
    </div>
        
    </div>


   
@endsection
