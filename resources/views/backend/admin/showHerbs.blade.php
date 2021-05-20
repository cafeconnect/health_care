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

<div class="animated fadeIn">
 <div class="row">
                  <div class="col-md-12">
                      <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                  <thead class="text-primary">
                     <th>Id</th>
                     <th>Local Name</th>
                     <th>Scientific Name</th>
                     <th>Herb Image</th>
                     <th>Type</th>
                     <th>Description</th>
                   
                     <th>Edit</th>
                     <th>Delete</th>
                    </thead>
                    <tbody>
                       @foreach ($herbs as $raw)
                       <tr>
                         <td>{{$raw->id}}</td>
                          <td>{{$raw->lname}}</td>
                          <td>{{$raw->sname}}</td>
                         
                          <td><img src="{{asset('storage/image/' .$raw->image)}}" width="100"></td>
                          <td>{{$raw->type}}</td>
                          <td>{{$raw->description}}</td>
                           <td>
                            <a href="editHerb{{ $raw->id }}" class="btn btn-success">Edit</a>
                          </td>
                          <td>
                        <form action="/herbDelete/{{$raw->id}}" method="post">
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
       @include('sweetalert::alert')
      @stop
 