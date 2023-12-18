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
      <h4>Conference Accepting System</h4>
      <p>Dates listed are deadlines for registering papers for the track or sub-conference. If tracks or subconferences have several different deadlines, the range is shown. All deadlines are Asia/Jakarta time unless otherwise noted. Deadlines in italics have expired.</p>
    </div> 
    <div class="container-quotes">
      <table class="table table-bordered data-table">
          <thead>
              <th>Area</th>
              <th>Conference</th>
              <th>Venue</th> 
              <th>When</th>
              <th>Deadline</th>
              {{-- <th>Submit</th> --}}
          </thead>
      </table>
    </div>
    <script type="text/javascript">
    $(function() {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('submitpaper')}}",
          columns: [
              {data: 'name', name:'name'},
              {data: 'venue', name: 'venue'},
              {data: 'start_date', name:'start_date'},
              {data:'end_date', name: 'end_date'},
          ]
      });
    });
    </script>
  </main>
</section>
@endsection
