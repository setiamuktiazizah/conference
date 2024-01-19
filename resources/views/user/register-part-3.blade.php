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
      <h4>Payment Method</h4>
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <td>Credit Card</td>
          </div>
          <div class="col">
            <table class="table table-bordered data-table" id="data-table">
              <thead>
                  <th>Option</th>
                  <th>Description</th>
              </thead>
              <tbody>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure est, assumenda at veritatis asperiores enim aperiam ea illo sed corrupti delectus quod fugit reprehenderit nihil mollitia, tenetur magnam modi?</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sunt animi modi, tempore ea, tempora eaque voluptates dignissimos qui corporis commodi nulla, temporibus sit. Assumenda corrupti culpa nostrum quisquam eos!</td>
              </tbody>
          </table>   
          <h5>Total Amount: <p>Rp 12.345</p></h5>
          </div>
      </div>
    </div>
    <script type="text/javascript">
      $(function() {
        var table = $('#data-table').DataTable();
      });
    </script>
  </main>
</section>
@endsection