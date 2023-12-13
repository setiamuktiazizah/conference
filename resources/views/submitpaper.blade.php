<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Webdemia</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="/contact">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li>
        </ul>
      </nav>

    </div>
  </header>

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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>