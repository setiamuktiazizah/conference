@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Articles</h2>
                    </div>
                </div>
                </div>
                <div class="content-header">
                    <table id="data-table" class="table table-bordered data-table">
                        <thead>
                            <th>Title</th>
                            <th>Abstract</th>
                            <th>Status</th>
                            <th>File Path</th>
                            <th>Turnitin File Path</th>
                            <th>Created By</th>
                            <th>Created At</th>
                        </thead>
                        <tbody>
                          @foreach ($articles as $article)     
                            <tr>
                              <td>{{ $article->title }}</td> 
                              <td>{{ $article->abstract }}</td>
                              <td>{{ $article->status }}</td>
                              <td>{{ $article->filepath }}</td>
                              <td>{{ $article->filepath_turnitin }}</td>
                              <td>{{ $article->created_by }}</td>
                              <td>{{ $article->created_at }}</td>
                            </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
          var table = $('#data-table').DataTable();
        });
    </script>
</body>
</html>
@endsection
