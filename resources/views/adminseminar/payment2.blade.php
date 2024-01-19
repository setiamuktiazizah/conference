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
                        <h2>Payment Method</h2>
                    </div>
                    <div class="container text-center">
                        <div class="row align-items-start">
                          <div class="col">
                            <div class="card" style="width: 18rem; background-color: #66a0a0">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <div class="card-body">
                                  <h5 class="card-title">Credit Card</h5><br>
                                  <p>Input your Credit Card Number</p>
                                  <input type="name" class="form-control" placeholder="xxxx-xxxx-xxxx">
                                </div>
                            </div>
                            <div class="card" style="width: 18rem; background-color: #66a0a0">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <div class="card-body">
                                  <h5 class="card-title">Debit Card</h5><br>
                                  <p>Input your Debit Card Number</p>
                                  <input type="name" class="form-control" placeholder="xxxx-xxxx-xxxx">
                                </div>
                            </div>
                            <div class="card" style="width: 18rem; background-color: #66a0a0">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <div class="card-body">
                                  <h5 class="card-title">Paypal</h5><br>
                                </div>
                            </div>
                          </div>
                          <div class="col">
                            <table class="table table-bordered data-table" id="data-table">
                              <thead>
                                  <th>Option</th>
                                  <th>Description</th>
                              </thead>
                              <tbody>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure est, assumenda at veritatis asperiores enim aperiam ea illo sed corrupti delectus quod fugit reprehenderit nihil mollitia, tenetur magnam modi?</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sunt animi modi, tempore ea, tempora eaque voluptates dignissimos qui corporis commodi nulla, temporibus sit. Assumenda corrupti culpa nostrum quisquam eos!</td>
                              </tbody>
                          </table>   
                          <h5>Total Amount: <p>$500</p></h5>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <a href="{{url('paymentgateway')}}"><button type="button" class="btn btn-primary">Pay</button></a></th>
                        </div>
                    </div>
                    
                    <script type="text/javascript">
                      $(function() {
                        var table = $('#data-table').DataTable();
                      });
                    </script>
                </div>
            </div>
        </div>
    </body>

@endsection
