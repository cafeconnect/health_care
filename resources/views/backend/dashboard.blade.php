@extends('layouts.dashboard')
@section('content')
@if (session('status'))
<div class="alert alert-warning" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
      {{ session('status') }}
</div>
@endif
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
            <div class="row">
                <div class="col-md-4">
                    <h2>Diseases</h2>
                    <div class="mb-40 text-center text-md-left">
            
                        <h5 class="mb-2">Respiratory diseases</h5>
                        
                        <a href="Respiratorydisease" >Check</a>
                      </div>
                    <div class="mb-40 text-center text-md-left">
                      <h5 class="mb-2">Cancer</h5>
                     <a href="Cancerdisease" >Check</a>
                  </div>
                  <div class="mb-40 text-center text-md-left">
                   
                    <h5 class=" mb-2">General Diseases</h5>
                   
                    <a href="Generaldisease" >Check</a>
                </div>
            </div>
            <div class="col-md-4 text-center align-self-center mb-4 mb-md-0">
                <img class="img-fluid" src="front/images/image1.jpg" alt="">
            </div>
            
            <div class="col-md-4">
              <div class="mb-40 text-center text-md-left">
                <h3>Herbs</h3>
                <h5 class="mb-2">Raw Herbs</h5>
                  <a href="RawHerbs">Check</a>
              </div>
              
              
            <div class="mb-40 text-center text-md-left">
                <h5 class="mb-2">Products</h5>
                  <a href="Products" >Check</a>
              </div>

              <div class="mb-40 text-center text-md-left">
                <h5 class="mb-2">General Herbs</h5>
                 <a href="Generalherbs">Check</a>
              </div>
         </div>
    </div>
    @include('sweetalert::alert')
    @stop