@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="background-color: #293677">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">WEBDEMIA</h2>
          <h4 data-aos="fade-up">2024</h4>
          <h4>Hybrid Conference in Surakarta, 1 Oktober 2024</h4>
        </div>
      </div>
    </div>
</section>
<section id="content" style="background-color: #293677;">
  <main id="main">
    <div class="container-quotes">
      <h3>Paper Authored in All Conferences</h3>
        <table class="table table-bordered data-table">
          <thead>
            <th>Conference</th>
            {{-- <th>Paper Title</th>
            <th>Status</th>
            <th>Revision</th>
            <th>Add and Delete Author</th>
            <th>Payment Status</th>
            <th>Invoice</th> --}}
          </thead>
      </table>
    </div>
    <script type="text/javascript">
    $(function() {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('paperinfo')}}",
          columns: [
              {data: 'name', name: 'name'},
          ]
      });
    });
    </script>
  </main>
</section>
@endsection
