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

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Conference Registration Details</h2>
                    </div>
                </div>
                <table class="table table-bordered data-table" id="data-table">
                <thead>
                <th>Package</th>
                <th>Name of Conference</th>
                <th>Location</th>
                <th>Name of Reviewers</th>
                <th>Topic</th>
                <th>Action</th>
                 </thead>
                <tbody>
                <th>Trial for Free</th>
                <th>ICEENG</th>
                <th>Egypt</th>
                <th><li>Jason</li>
                <li>Ashnam</li>
                <li>Maria</li></th>
                <th>Artificial Intelligent</th>
                <th><a href="{{url('registerconference')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button></a>
                    <a href="{{url('payment')}}"><button type="button" class="btn btn-primary">Pay</button></a></th>
                 </tbody>
                 <tbody>
                    <th>Gold</th>
                    <th>AAACE</th>
                    <th>Australia</th>
                    <th><li>Emily</li>
                    <li>Gabriel</li>
                    <li>James</li></th>
                    <th>Computer Science</th>
                    <th><a href="{{url('registerconference3')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button></a>
                        <a href="{{url('payment3')}}"><button type="button" class="btn btn-primary">Pay</button></a></th>
                </tbody>
                </table>
            </div>  
        </div>  
    <script type="text/javascript">
      $(function() {
        var table = $('#data-table').DataTable();
      });
      </script>  
  </body>
@endsection




    