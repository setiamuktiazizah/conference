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
          <h2 data-aos="fade-up">Register Webdemia Partner</h2>
      </div>
    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">
      <form method="POST" action="/registerpartner">
        @csrf
        <div class="form-group">
          <label for="name">Username</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Ex: Jason Jazz" value="{{ old('name') }}" required><br>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name"class="form-control"  id="first_name" placeholder="Ex: Jason Jazz" value="{{ old('first_name') }}" required><br>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Ex: Jason Jazz" value="{{ old('last_name') }}" required><br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"  value="{{ old('email') }}" required><br>
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <input type="text" name="institution" class="form-control" id="institution" placeholder="Sebelas Maret University"  value="{{ old('institution') }}" required><br>
        </div>

        <div class="form-group">
            <label for="nib">NIB</label>
            <input type="number" name="nib" class="form-control" id="nib" placeholder="1234567"  value="{{ old('nib') }}" required><br>
        </div>

        <div class="col-6">
            <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}"><button type="submit" class="btn btn-primary">Register</button></a>
        </div>
      </form>
      @if ($errors->any())
            <div class="alert alert-danger mt-3">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
    </div>
  </section>
 </div>
</main>
</section>
@endsection
