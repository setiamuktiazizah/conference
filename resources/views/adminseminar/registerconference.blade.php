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
                        <h2>Register Conference</h2>
                    </div>
                </div>
                <div class="row gx-3">
                <div class="col">
                <a href="{{url('registerconference')}}">
                <i class="bi bi-journal-plus"></i>
                   Register Conference
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('addtopic')}}">
                  <i class="bi bi-person-fill-add"></i>
                  Add Topic
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('timescheduling')}}">
                  <i class="bi bi-file-arrow-up"></i>
                  Time Scheduling
                  </a>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="name">Name of Conference:</label>
                <input type="name" class="form-control" placeholder="Name of Conference">
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="venue" class="form-control" placeholder="Name of Location">
                <input type="url" class="form-control" placeholder="Location Link">
              </div>
              <div class="form-group">
                <label for="conferenceType">Type of Conference:</label>
                <select id="conferenceType" class="form-control">
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
              </div>
              <div class="form-group">
                <label for="total_reviewer">Total Reviewer</label>
                <input type="number" class="form-control" placeholder="Number of Reviewers">
              </div>
              <br>
              <div class="modal-footer">
                <a href="{{url('addtopic')}}"><button type="button" class="btn btn-primary">Next</button></a>
              </div>
            </div>
          </div>
        </div>
</body>
@endsection
  
