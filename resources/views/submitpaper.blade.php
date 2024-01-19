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
          <h2 data-aos="fade-up">Conference Accepting submission</h2>
          <p data-aos="fade-up" data-aos-delay="100">Dates listed are deadlines for registering papers for the track or sub-conference. If tracks or subconferences have several different deadlines, the range is shown. All deadlines are Asia/Jakarta time unless otherwise noted.  Deadlines in italics have expired.</p>
      </div>
      <div class="row gx-5">
          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              <input type="text" class="form-control" placeholder="tittle or name of conference">
              <button type="submit" class="btn btn-warning">Search</button>
          </form>
      </div>  

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
          <table class="table table-bordered">
              <thead>
                  <tr>
                  <th scope="col">Area</th>
                  <th scope="col">Conference</th>
                  <th scope="col">Name</th>
                  <th scope="col">Details</th>
                  <th scope="col">Where and When</th>
                  <th scope="col">Deadlines</th>
                  <th scope="col">submit</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">Electrical engineering</th>
                      <td>14th ICEENG 2024</td>
                      <td>2024 14th International Conference on Electrical Engineering (ICEENG)</td>
                      <td class="align-middle">
                          <ul class="nav justify-content-center">
                              <a class="icon-link" href="..."><i class=" align-middle bi bi-info-circle"></i></a>
                          </ul>
                      </td>
                      <td><p>Cairo, Egypt</p><p>May 21, 2024</p></td>
                      <td>Jan 16, 2024 18:59 Asia/Pontianak</td>
                      <td class="align-middle">
                          <ul class="nav justify-content-center">
                              <a class="icon-link" href="{{url('submitregisterpaper')}}"><i class=" bi bi-plus-circle-fill"></i></a>
                          </ul>
                      </td>
                  </tr>
                  <tr>
                      <th scope="row">Communications</th>
                      <td>2024 IEEE WF-PST</td>
                      <td>2024 IEEE World Forum on Public Safety Technology (WF-PST)</td>
                      <td class="align-middle">
                          <ul class="nav justify-content-center">
                              <i class=" align-middle bi bi-info-circle"></i>
                          </ul>
                      </td>
                      <td><p>Washington, DC, USA</p><p>May 14, 2024</p></td>
                      <td>Dec 19, 2023 11:59 Asia/Pontianakk</td>
                      <td class="align-middle">
                          <ul class="nav justify-content-center">
                              <i class=" bi bi-plus-circle-fill"></i>
                          </ul>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>

    </div>
  </section>
</main>
@endsection