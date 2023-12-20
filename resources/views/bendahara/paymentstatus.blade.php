@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="background-color: #293677">

</section>
<section id="content" style="background-color: #293677;">
  <main id="main">
    <div class="container-quotes">
        <h3>Paper Authored in All Conferences</h3>
          <table class="table table-bordered data-table">
            <thead>
              <th>Title</th>
              <th>Author</th>
              <th>Payment Status</th>
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
