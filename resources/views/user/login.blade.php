<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In | WebDemia</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}} ">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <h1 class="nama-logo">WEBDEMIA</h1>
    <div class="container">
        <div class="left-column">
            <img src="{{asset('images\Humaaans Wireframe.png')}}" alt="Gambar" class="gambar-kiri" style="width: 820.95px; height: 550px; left: 160px; top: 20px; position: absolute; mix-blend-mode: multiply">
        </div>
        <div class="right-column">
            <div style="top: 100px; left: 850px; position: absolute; font-family: 'Roboto', sans serif; font-size: 30px; font-weight: bold; color: #293677">Log In</div>
            <button style="top: 160px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 10.7px; font-weight: bold; background-color: #B8DBE9; width: 140px; color: #293677"><i class="bi bi-google"></i> Log In with Google</button>
            <button style="top: 160px; left: 900px; position: absolute; font-family: 'Roboto', sans serif; font-size: 10.7px; font-weight: bold; background-color: #B8DBE9; width: 140px; color: #293677"><i class="bi bi-facebook"></i> Log In with Facebook</button>
            <div style="top: 200px; left: 890px; position: absolute; font-family: 'Roboto', sans serif; font-size: 30px; font-weight: bold; color: #293677">Or</div>
            
            
            <form method="POST" action="/login">
            @csrf
                <div style="top: 250px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 24px; font-weight: bold; color: #293677; width: 100px">Email</div>
                <input type="email" name = "email" id="email" style="top: 300px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
                <div style="top: 350px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 24px; font-weight: bold; color: #293677; width: 100px">Password</div>
                <input type="password" name = "password" id="password"  style="top: 400px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
                <button style="top: 450px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 24px; font-weight: bold; background-color: #293677; width: 300px; color: white" type="submit"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                <div style="top: 500px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px">Don't have an account? <a href="/signup" style="color: #293677">Sign Up</a></div>
            </form>
        </div>
    </div>
</body>
</html>