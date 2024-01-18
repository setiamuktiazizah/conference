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
        <table class="table table-bordered data-table" id="data-table">
          <thead>
            <th>Conference</th>
            <th>Paper Title</th>
            <th>Status</th>
            <th>Revision</th>
            <th>Add and Delete Author</th>
            <th>Payment Status</th>
            <th>Invoice</th>
          </thead>
          <tbody>
            @foreach ($articles as $article)     
              <tr>
                <td>{{$article->conference->name}}</td>
                <td>{{$article->title}}</td> 
                <td>{{ ucfirst($article->status)}}</td>
                <td class="text-center align-middle"><button class="btn btn-success">
                  <i class="fas fa-info-circle"></i>
                </button></td>
                <td class="text-center align-middle"><button class="btn btn-primary">
                  <i class="fas fa-plus"> </i></button> <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                </td>
                <td class="text-center"> - </td>
                <td class="text-center"> - </td>
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
