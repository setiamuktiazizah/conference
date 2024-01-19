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
    <h3 class="mb-5">Register for ....</h3>
    <table class="table table-bordered data-table" id="data-table">
        <h5>Available registration</h5>
        <thead>
            <th>Option</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Place and Date</th>
            <th>Register</th>
        </thead>
        <tbody>
        </tbody>
    </table>   
    <table class="table table-bordered data-table" id="data-table">
        <h5>Available registration</h5>
        <thead>
            <th>Option</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Place and Date</th>
            <th>Action</th>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>  
    <script type="text/javascript">
      $(function() {
        var table = $('#data-table').DataTable();
      });
      </script>  
  </main>
</section>
@endsection