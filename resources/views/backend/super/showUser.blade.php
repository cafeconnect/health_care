
@extends('layouts.admin')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
      {{ session('status') }}
</div>
@endif
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
                  <div class="col-md-12">
                      <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                  <thead class="text-primary">
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Usertype</th>
                     <th>Edit</th>
                     <th>Delete</th>
                    </thead>
                    <tbody>
                       @foreach ($users as $raw)
                       <tr>
                         <td>{{$raw->id}}</td>
                          <td>{{$raw->name}}</td>
                          <td>{{$raw->email}}</td>
                          <td>{{$raw->usertype}}</td>
                          <td>
                          <a href="editUser{{ $raw->id }}" class="btn btn-success">Edit</a>
                          </td>
                          <td>
                            <form action="/userDelete/{{$raw->id}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                                <button type="submit"class="btn btn-danger">Delete</button>
                              </form>
                        </td>
                       </tr>
                        @endforeach
                   </div>
                </div>
             </div>
            </div>
         </table>
    </div>
</div>
        </div>
        </div>

       </div>
 
      

   
  @stop
 

    