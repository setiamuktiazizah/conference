@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">WEBDEMIA</h2>
        <p data-aos="fade-up" data-aos-delay="100">2024</p>
        <p data-aos="fade-up" data-aos-delay="100">Conference Management System</p>
      </div>

      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
        <img src="{{asset('assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
      </div>

    </div>
  </div>
</section>

<main id="main">
  <section id="featured-services" class="featured-services">
    <div class="container -xxl">
      <div class="row gy-4">
          <h2 data-aos="fade-up">Register Webdemia Partner</h2>
      </div>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">
        <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Jason Jazz"><br>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Email Address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"><br>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Institution</label>
            <input type="institution" class="form-control" id="exampleFormControlInput1" placeholder="Sebelas Maret University"><br>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Address</label>
            <input type="address" class="form-control" id="exampleFormControlInput1" placeholder="Ir. Sutami street, Jebres, Surakarta, Central Java, Indonesia"><br>
        </div>

        <div class="col-6">
            <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}"><button type="button" class="btn btn-primary">Register</button></a>
        </div>
    </div>
  </section>
</main>
@endsection
