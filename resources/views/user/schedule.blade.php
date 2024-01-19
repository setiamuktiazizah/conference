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
      <h3>Conferences open for registration</h3>
        <table class="table table-bordered data-table" id="data-table">
          <thead>
            <th style="text-align: center">Conference</th>
            <th style="text-align: center">Home Page</th>
            <th style="text-align: center">Place</th>
            <th style="text-align: center">Schedule</th>
            <th style="text-align: center">Register</th>
          </thead>
          <tbody>
            @foreach ($conferences as $conference)     
              <tr>
                <td>{{$conference->name}}</td>
                <td class="text-center align-middle"><a href={{$conference->url}} ><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                <td style="position: relative;">{{$conference->venue}} 
                  <a href={{$conference->url_venue}} style="position: absolute;transform: translate(50%, 50%); top:5px; right: 10px;">
                      <i class="fa-solid fa-location-dot"></i>
                  </a>
              </td>
                <td>{{$conference->Schedule->start_date .' - '. $conference->Schedule->end_date}} </td>
                {{-- <td class="text-center align-middle"><button class="btn btn-success">
                  <i class="fas fa-arrow-up-right-square"></i>
                </button></td> --}}
                <td class="text-center align-middle"><button class="btn btn-success">
                  <i class="fas fa-user-plus"></i>
                </button></td>
              </tr>
            @endforeach
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
