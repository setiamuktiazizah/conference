@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Status</title>
</head>
<style>
  .status-pending {
      color: white;
      background-color: #D9D9D9;
  }

  .status-success {
      color: white;
      background-color: #59ED56;
  }

  .status-failed {
      color: white;
      background-color: #FF4242;
  }

  /* Add styles for other status classes as needed */
</style>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
              <div class="container-quotes">
                <div class="container-quotes">
                  <h3>List of Article in Conference</h3>
                  
                    <table id="payments-table" class="table table-bordered data-table ">
                      <thead>
                        <th class="text-center">Author</th>
                        <th class="text-center">Payment Status</th>
                      </thead>
                      <tbody>
                        @foreach ($payments as $payment)
                        <tr>
                            <td>{{$payment->user_name}}</td>
                            <td class="text-center {{ \App\Http\Controllers\PaymentController::getStatusColorClass($payment->status) }}">{{ $payment->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                
              
              </div>
            </div>
          </div>
        </div>
        
      
</body>

@endsection
