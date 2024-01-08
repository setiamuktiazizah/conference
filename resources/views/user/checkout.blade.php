<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key') }}E"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Toko</title>
</head>
<body>
    <div class="container">
        <h1 class='my-3'>Conference</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/durian.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Details</h5>
              <table>
                <tr>
                    <td>Partner Name : </td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Price : </td>
                    <td>{{ $payment->value }}</td>
                </tr>
              </table>
              <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
            </div>
          </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
            //   alert("payment success!"); console.log(result);
            window.location.href = 'user.invoice/{{ $payment->id }}'
            },
            onPending: function(result){
              /* You may add your own implementation here */
            //   alert("wating your payment!"); console.log(result);
            window.location.href = 'user.invoice/{{ $payment->id }}'
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>
</body>
</html>