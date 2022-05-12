@extends('layouts.main')
@section('title', 'Profile')

@section('container')

<div class="container mt-5 d-flex justify-content-center">
  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
      <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/products/fe1ce777bfefcac4968acdc0067d45ea.jpg?v=1648461087" class="d-block" alt="..." width="500" height="500">
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/products/b17491f7d74fefd9e46cab2349ebd354.jpg?v=1647600259" class="d-block" alt="..." width="500" height="500">
      </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
      <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/products/16e629459652e3a8d33560d69bfe8207.jpg?v=1647942341" class="d-block" alt="..." width="500" height="500">
      </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <hr class="featurette-divider">
  </div>
  <!-- /END THE FEATURETTES -->
</div>

@endsection