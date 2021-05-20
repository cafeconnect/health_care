@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="bg-light">
        <div class="heading ml-2">
            <h4>General Diseases</h4>
        <div class="container">
            <hr>
        </div>
        </div>
    </div>
    @foreach ($diseases as $raw)
    <div class="row">
        <div class="col-md-4  pb-2">
            <img src="{{asset('storage/image/' .$raw->image)}}" width="200" height="200">
        </div>
        <div class="col-md-4">
            <h5 class="subheading">Name: &nbsp;{{$raw->name}}</h5> 
            <h5 class="subheading">Cause: &nbsp; {{$raw->cause}}</h5>
            
        </div>
   
            <div class="col-md-4">
                <h4 class="subheading">Signs.</h4>
                <p>{{$raw->signs}}</p>
                <a href="TGeneraldisease" class="btn btn-primary btn-primary-sm">Check Treatement</a>
                </div>
                
        </div>
        
            
       
    </div>
</div>
@endforeach
@endsection

       