@extends('template.template')

@section('content')
<main id="main">
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

  <section id="featured-services" class="featured-services">
    <div class="container -xxl">
      <div class="row gy-4">
          <h2 data-aos="fade-up">Register a paper for 2024 14th Conference on Electrical Engineering (ICEENG): Aerospace</h2>
      </div>
      <div class="row gx-3">
        <div class="col">
          <a href="{{url('submitregisterpaper')}}">
            <i class="bi bi-journal-plus"></i>
            Register Paper
          </a>
        </div>
        <div class="col">
          <a href="{{url('submitaddauthor')}}">
            <i class="bi bi-person-fill-add"></i>
            Add Author
          </a>
        </div>
        <div class="col">
          <a href="{{url('submituploadreviewmanuscript')}}">
            <i class="bi bi-file-arrow-up"></i>
            Upload Review Manuscript
          </a>
        </div>
      </div>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">
      <div class="container px-4">
      Upload your paper
          <div class="row gx-5">
              <div class="col">
                <div>
                  <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
              </div>
              <div class="col">
                <div>
                  <a href="{{url('paperinfo')}}"><button type="button" class="btn btn-primary">Done</button></a>
                </div>
              </div>
          </div>
      </div>
    </div>
  </section>
</main>
@endsection