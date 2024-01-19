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
        <table id="data-table" class="table table-bordered data-table">
            <thead>
                <th>No</th>
                <th>Logo</th>
                <th>Name of Conference</th>
                <th>Action</th>
            </thead>
            <tbody>
              @foreach ($conferences as $conference)     
                <tr>
                    <td>{{$loop -> iteration}}</td> 
                    <td>{{$conference->logo}}</td>
                    <td>{{$conference->name}}</td>
                    <td>
                    @if($conference->status == 'paid')
                        <button type="submit" class="btn btn-success" disabled='disabled'>Paid</button>
                    @else
                        <a href="/bundling"><button type="submit" class="btn btn-secondary">Unpaid</button></a>
                    @endif
                    </td>
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