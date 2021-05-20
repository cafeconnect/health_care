@extends('layouts.dashboard')
@section('content')
<div class="container">
    
    @foreach ($diseases as $raw)
    <div class="row">
        <div class="heading ml-2">
        <h2>{{$raw->name}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4 class="subheading">Treatement.</h4>
            <p>{{$raw->treatment}}</p>
            
        </div>
    </div>
</div>
@endforeach
@endsection

       