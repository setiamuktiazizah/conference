@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="background-color: #293677">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">WEBDEMIA</h2>
        <h4 data-aos="fade-up">2024</h4>
        <h4>Conference Management System</h4>
      </div>
    </div>
  </div>
</section>
<section id="content" style="background-color: #293677;">
  <main id="main">
    <div class="container-quotes">
      <section id="featured-services" class="featured-services">
        <div class="container -xxl">
          <div class="row gy-4">
              <h2 data-aos="fade-up">Register Conference</h2>
          </div>
        </div>
      </section>
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <div class="card" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title">Trial for Free</h5>
                <p class="card-text">For Small Conference 10 Participants</p>
                <p class="card-text">ONLINE</p>
                <a href="/registerconference"><button type="submit" class="btn btn-primary">Choose</button></a>
              </div>
            </div><br>
          </div>
          <div class="col">
              <div class="card" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title">Silver $500</h5>
                  <p class="card-text">For Small Conference 80 Participants</p>
                  <p class="card-text">HYBRID</p>
                  <a href="/registerconference2"><button type="submit" class="btn btn-primary">Choose</button></a>
                </div>
              </div><br>
          </div>
          <div class="col">
              <div class="card" style="width: 25rem;">
                  <div class="card-body">
                    <h5 class="card-title">Gold $1000</h5>
                    <p class="card-text">For Medium Conference 200 Participants</p>
                    <p class="card-text">HYBRID</p>
                    <a href="/registerconference3"><button type="submit" class="btn btn-primary">Choose</button></a>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 25rem;">
              <div class="card-body">
                <h5 class="card-title">Platinum $1200</h5>
                <p class="card-text">For Medium Conference 300 Participants</p>
                <p class="card-text">HYBRID</p>
                <a href="/registerconference4"><button type="submit" class="btn btn-primary">Choose</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
</section>
@endsection


