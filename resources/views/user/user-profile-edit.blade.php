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
      <h3 class="user-profile">
        User Profile
        <div class="top-right">
          <i class="fa-regular fa-floppy-disk"></i>
        </div>
      </h3>
      <h5>Username</h5>
      <input type="text">
      <h5>First Name</h5>
      <input type="text">
      <h5>Last Name</h5>
      <input type="text">
      <h5>Email</h5>
      <input type="email">
      <h5>Institution</h5>
      <input type="text">
    </div>
  </main>
</section>
@endsection