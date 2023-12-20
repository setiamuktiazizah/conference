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
          <h2 data-aos="fade-up">Help for WEDEMIA help</h2>
          <p data-aos="fade-up" data-aos-delay="100">For problems with WEBDEMIA itself, contact the help staff.</br>The manual provides a background on WEBDEMIA features and operations.</p>
      </div>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-3">
        <div class="col mb-3">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Search FAQ for"></textarea>
        </div>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Topics
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">General Information</a></li>
                <li><a class="dropdown-item" href="#">Paper Submission</a></li>
                <li><a class="dropdown-item" href="#">Conference Configuration</a></li>
            </ul>
        </div>
        <div class="col-6">
              <a href="{{url('submituploadreviewmanuscript')}}"><button type="button" class="btn btn-primary">Search</button></a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
