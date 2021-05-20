
@extends('layouts.admin')
@section('content')
@include('sweetalert::alert')
<div class="container">
   <hr size="30">
  </div>

  <div class="col-12">
    <div class="mb-3 float-right">

      <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
             <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
             <span class="admi0-name">{{ Auth::user()->name }}</span>
               
            </a>
        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
           <li><a class="dropdown-item" href="">My profile</a>
            </li>
           <li><a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                  {{ __('Logout') }}
              </a>
    
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
           </li>
        </ul>
   
    </div>
  </div>
 
    @if (session('status'))
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
                {{ session('status') }}
          </div>
      @endif
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
      <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
             <a class="has-arrow" href="admin">
            <i class="fa big-icon fa-home icon-wrap"></i>
             <span class="mini-click-non"><b>Management</b></span>
          </a>
        </ul>
        <div class="container">
          <hr size="30">
          </div>
   
      <div class="container">
        <div class="bg-light">
           <div class="raw">
            <div class="col-4 pt-2">
            <div class="d-flex">
              <div class="pr-3">
                <div class="centre">
                <a class="has-arrow" href="addDisease">
                <button type="button" class="btn btn-success waves-effect waves-light m-r-10">Add Disease</button>
                </a>
              </div>
            </div>

            <div class="pr-3">
              <a class="has-arrow" href="addHerb">
             <button type="button" class="btn btn-success waves-effect waves-light m-r-10">Add Herbs
             </button>
            </a>
          </div>
          
            </div>
          </div>
           </div>
        </div>
      </div>
     <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
            
          <div class="container">
            <hr size="30">
            </div>
  
       
          <ul class="metismenu" id="menu1">
            <a class="has-arrow" href="showHerbs">
          <i class="fa big-icon fa-home icon-wrap"></i>
           <span class="mini-click-non">Herbs Management</span>
        </a>
      </ul>
      <ul class="metismenu" id="menu1">
        <a class="has-arrow" href="showDiseases">
          <i class="fa big-icon fa-home icon-wrap"></i>
            <span class="mini-click-non">Diseases Management</span>
        </a> 
      </ul>
      <ul class="metismenu" id="menu1">
        <a class="has-arrow" href="showContacts">
          <i class="fa big-icon fa-home icon-wrap"></i>
            <span class="mini-click-non">Contact Management</span>
        </a> 
      </ul>
      <ul>
        <a href="dashboard">
      <button type="submit"class="btn btn-danger">users page</button>   
        </a>
    </ul>
     
    
  </div>


     </div>
    </div>
   </div>
  </div>
</nav>
   </div>
   
   
  @stop
 
