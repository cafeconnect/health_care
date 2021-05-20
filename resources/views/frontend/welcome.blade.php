@extends('layouts.master')
@section('content')

<div class="container">
  
    <div class="content mt-3">
      <div class="container">
        <div class="row mb-5 justify-content-center">
           <div class="col-md-6 text-center">
             <h2 class="section-sub-title">our Products</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-10 mb-5">
          <div class="product-item">
            <figure>
              <img src="front/images/image1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <h3 class="mb-1">LocalName</h3>
              <p class="mb-4">Carbus inxiou</p>
             <a href="/login" class="btn btn-danger mr-1 rounded-0">more</a>
             </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="front/images/image2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
              <div class="mb-3">
                <h3 class="mb-1">LocalName</h3>
                <p class="mb-4">Carbus inxiou</p>
             <a href="/login" class="btn btn-danger mr-1 rounded-0">more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-10 mb-5">
          <div class="product-item">
            <figure>
              <img src="front/images/image1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="px-4">
             <h3 class="mb-1">LocalName</h3>
              <p class="mb-4">Carbus inxiou</p>
             <a href="/login" class="btn btn-danger mr-1 rounded-0">more</a>
             </div>
          </div>
        </div>
      </div>
  </div>
 


@endsection
