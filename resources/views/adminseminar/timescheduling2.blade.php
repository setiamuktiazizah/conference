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
                        <h2>Time Scheduling (Silver Package)</h2>
                    </div>
                </div>
                <div class="row gx-3">
                <div class="col">
                <a href="{{url('registerconference2')}}">
                <i class="bi bi-journal-plus"></i>
                   Register Conference
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('addtopic2')}}">
                  <i class="bi bi-person-fill-add"></i>
                  Add Topic
                  </a>
                </div>
                <div class="col">
                  <a href="{{url('timescheduling2')}}">
                  <i class="bi bi-file-arrow-up"></i>
                  Time Scheduling
                  </a>
                </div>
              </div>
              <br>
              <h6><b>Submiting Paper Date</b></h6>
            <div class="row justify-content-around">  
              <div class="col-5">
                <input type="name" class="form-control" placeholder="Start Date">
              </div>
              <div class="col-5">
                <input type="email" class="form-control" placeholder="End Date">
              </div>
            </div>
            <br>
            <h6><b>Review Paper Date</b></h6>
            <div class="row justify-content-around">  
              <div class="col-5">
                <input type="name" class="form-control" placeholder="Start Date">
              </div>
              <div class="col-5">
                <input type="email" class="form-control" placeholder="End Date">
              </div>
            </div>
            <br>
            <h6><b>Upload Final Manuscript and Presentation Date</b></h6>
            <div class="row justify-content-around">  
              <div class="col-5">
                <input type="name" class="form-control" placeholder="Start Date">
              </div>
              <div class="col-5">
                <input type="email" class="form-control" placeholder="End Date">
              </div>
            </div>
            <br>
            <h6><b>Conference Date</b></h6>
            <div class="row justify-content-around">  
              <div class="col-5">
                <input type="name" class="form-control" placeholder="Start Date">
              </div>
              <div class="col-5">
                <input type="email" class="form-control" placeholder="End Date">
              </div>
            </div>
            <br>
              
              <br>
              <div class="modal-footer">
                <a href="{{url('bundling')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                <a href="{{url('conferenceregistrationdetails')}}"><button type="button" class="btn btn-primary">Save</button></a>
              </div>
            </div>
          </div>
        </div>
</body>
@endsection
  
