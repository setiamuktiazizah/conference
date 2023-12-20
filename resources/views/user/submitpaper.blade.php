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
<<<<<<< HEAD

      <table id="data-table" class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Area</th>
              <th>Name</th>
              <th>Where and When</th> 
              <th>Deadline</th>
              <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
          @foreach($conferences as $conference)

          <tr>
            <td>{{ $conference->topic }}</td>
            <td>{{ $conference->name }}</td>
            <td>{{ $conference->venue }} </br> {{ $conference->start_date }} </td> 
            <td>{{ $conference->end_date }}</td>
            <td>
              <a href="{{ route('submit.register.paper') }}"><button type="button" class="btn btn-primary">+</button></a>
            </td>
          </tr>
          @endforeach

        </tbody>
    </table>
    </div>

=======
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
>>>>>>> 734502cba371b9653ffaa8960260d8c4838b8075
  </main>
</section>
@endsection

@section('js')
<script type="text/javascript">
  $(function() {
    $('#data-table').DataTable({
        // processing: true,
        // serverSide: true,
        // ajax: "{{ route('get.conference') }}",
        // columns: [
        //     // {data: 'id', name:'id'},
        //     {data: 'topic', name:'topic'},
        //     {data: 'name', name: 'name'},
        //     {
        //       render: function(data, type, row) {
        //                     return row.venue+"</br>"+row.start_date;
        //       },
        //     },
        //     // {data: 'start_date', name:'start_date'},
        //     {data: 'end_date', name:'end_date'},
        //     // {data: 'submit', name: 'submit'},
        //     // {data: 'action', name:'action', orderable:false, searchable:false}
        // ]
    });
  });
  </script>
@endsection
