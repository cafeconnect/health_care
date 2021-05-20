
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row-md-12">
        <div class="card-header">
           <div class="row text-center">
            <h4>Edit Users</h4>
           </div>
            <div class="card-body">
                <form action="updateUser{{ $raw->id }}" enctype="multipart/form-data" method="post" class="p-5 bg-white">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <div class="form-group">
                        <label>Name</label>
                  <input type="text" name="name" value="{{ $raw->name}}" class="form-control">
                  </div>

                        <div class="form-group">
                            <label>Give roles</label>
                            <select name="usertype" class="form-control">
                                <option value="super">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="normal users">Normal Users</option>
                            </select>
                        </div>
                      
                        <button type="submit" class="btn btn-success">update</button>
                        <a href="showUser" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
 
</div>
@stop