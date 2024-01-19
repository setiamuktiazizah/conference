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
                        <h2>Conference</h2>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-end">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" style="background-color: white; color:black" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div> --}}
                <div style="margin-top: 20px;">
                    <a href="{{url('/addconference')}}"><button type="button" class="btn btn-success">+ Add Conference</button></a>
                    </div>
                </div>
                <div class="content-header">
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
                                    <a href="#"><button type="submit" class="btn btn-secondary">Unpaid</button></a>
                                @endif
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








