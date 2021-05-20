@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="bg-light">
        <div class="heading ml-2">
            <h4>Raw Herbs</h4>
        <div class="container">
            <hr>
        </div>
        </div>
    </div>
    @foreach ($herbs as $raw)
    <div class="row">
        <div class="col-md-4  pb-2">
            <img src="{{asset('storage/image/' .$raw->image)}}" width="150" height="150">
        </div>
        <div class="col-md-4">
            <h5 class="subheading">LocalName: &nbsp;{{$raw->lname}}</h5>
            <h5 class="subheading">ScientificName: &nbsp; {{$raw->sname}}</h5>
        </div>
    </div>
    <div class="col-md-4">
        <h5 class="subheading">Description.</h5>
        <p>{{$raw->description}}</p>
    </div>
</div>
@endforeach
@endsection

       