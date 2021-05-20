@extends('layouts.admin')
@section('content')
<div class="animated fadeIn">
    <div class="row">
                  <div class="col-md-12">
                      <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                  <thead class="text-primary">
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Message</th>
                     <th>Delete</th>
                    </thead>
                    <tbody>
                       @foreach ($contacts as $raw)
                       <tr>
                         <td>{{$raw->id}}</td>
                          <td>{{$raw->name}}</td>
                          <td>{{$raw->email}}</td>
                          <td>{{$raw->phone}}</td>
                          <td>{{$raw->message}}</td>
                          <td>
                           <form action="/contactDelete/{{$raw->id}}" method="post">
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