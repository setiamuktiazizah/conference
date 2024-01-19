<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Conference</title>
</head>
<body>
    <div class="container">
        <h1 class='my-3'>Invoice</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Detail</h5>
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
                <tr>
                    <td>Status</td>
                    <td> : {{ $payment->status }}</td>
                </tr>
              </table>
            </div>
          </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>