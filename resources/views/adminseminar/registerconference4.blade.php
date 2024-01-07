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
                        <h2>Register Conference (Platinum Package)</h2>
                    </div>
                </div>
                <div class="row gx-3">
                <div class="col">
                <a href="{{url('registerconference4')}}">
                <i class="bi bi-journal-plus"></i>
                   Register Conference
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('addtopic4')}}">
                  <i class="bi bi-person-fill-add"></i>
                  Add Topic
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('timescheduling4')}}">
                  <i class="bi bi-file-arrow-up"></i>
                  Time Scheduling
                  </a>
                </div>
              </div>
              <br>
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Name of Conference">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Location">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Type of Conference (Online/ Offline/ Hybrid)">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Number of Reviewers (min 3)">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Name of Reviewer 1">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Name of Reviewer 2">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Name of Reviewer 3">
              </div>
              <br>
              <div class="modal-footer">
                <a href="{{url('addtopic4')}}"><button type="button" class="btn btn-primary">Next</button></a>
              </div>
            </div>
          </div>
        </div>
</body>
@endsection
  
