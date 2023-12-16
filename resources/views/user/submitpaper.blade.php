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
<main id="main">
   <div class="container">
    <h4>Conference Accepting System</h4>
    <p>Dates listed are deadlines for registering papers for the track or sub-conference. If tracks or subconferences have several different deadlines, the range is shown. All deadlines are Asia/Jakarta time unless otherwise noted. Deadlines in italics have expired.
    <input type="text" name="search-conference" placeholder="Title or name of conference">
    <button>Search</button>
    </p>
   </div> 
   <div class="container">
    <table class="table table-bordered data-table">
        <thead>
            {{-- <th>Area</th>
            <th>Conference</th> --}}
            <th>Name</th>
            {{-- <th>Details</th> --}}
            <th>Venue</th>
            {{-- <th>Deadline</th>
            <th>Submit</th> --}}
            {{-- <th>Aksi</th> --}}
        </thead>
    </table>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript">
   $(function() {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('submitpaper')}}",
        columns: [
            // {data: 'id', name:'id'},
            // {data: 'area', name:'area'},
            {data: 'name', name: 'name'},
            // {data: 'details', name:'details'},
            {data: 'venue', name: 'venue'},
            // {data: 'deadline', name:'deadline'},
            // {data: 'submit', name: 'submit'},
            // {data: 'action', name:'action', orderable:false, searchable:false}
        ]
    });
   });
   </script>
</main>
@endsection
