@extends('layouts.main')
@section('title', 'Home')

@section('container')

<section id="home" class="hero-section bg-violet-100 p-3 p-md-4 p-lg-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-md-1 text-md-end mb-5 mb-md-0">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner rounded-3">
            <div class="hero-img carousel-item active">
              <img class="text-end img-fluid" src="https://d29c1z66frfv6c.cloudfront.net/pub/media/banner/W19-Divided-Cosy-Cool-Bhs-Mobile.jpg" class="d-block" alt="..." width="100%">
            </div>
            <div class="hero-img carousel-item">
              <img class="text-end img-fluid" src="https://d29c1z66frfv6c.cloudfront.net/pub/media/banner/W19-Men-Naturally-Cool-Bhs-Mobile.jpg" class="d-block" alt="..." width="100%">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-0">
        <h5 class="fw-light text-muted">WELCOME TO</h5>
        <h1 class="display-3 fw-bold lh-sm">BomanStock</h1>
        <p class="hero-desc">
        perusahaan pakaian Indonesia yang paling eksis, kreatif dan aktif yang dikenal dengan produk-produk terbaik kami di seluruh dunia dan menjadi produk standar emas untuk perusahaan pakaian jadi Indonesia lainnya.
        </p>
        <div class="social-media d-flex my-4">
          <p class="text-secondary">Follow Us</p>
          <a class="media-icon link-secondary ms-3" href="#">
            <i class="fa-brands fa-instagram fa-2x"></i>
          </a>
          <a class="media-icon link-secondary ms-3" href="#">
            <i class="fa-brands fa-youtube fa-2x"></i>
          </a>
        </div>
        <button type="button" class="btn btn-primmary btn-cta" data-bs-toggle="modal" data-bs-target="#aboutUs">
          About Us
        </button>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/banner_web_1_03f0047e-8ff3-4585-8749-36fffa4809bf.jpg?v=1647843613" class="d-block" alt="..." width="100%">
      </div>
      <div class="carousel-item active">
        <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/banner_web_4_305ac010-62b0-4794-ae84-4bb83040557b.jpg?v=1647843612" class="d-block" alt="..." width="100%">
      </div>
      <div class="carousel-item">
        <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/banner_web_2_622a213f-dd9a-404c-9657-93b939162ff6.jpg?v=1647843612" class="d-block" alt="..." width="100%">

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/tshirt.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/jacket.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/shirt.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/pants.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/bags.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="text-end img-fluid" src="https://cdn.shopify.com/s/files/1/0607/2841/0296/files/socks.jpg?v=1643179863" class="d-block" alt="..." width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection