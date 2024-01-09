<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | WebDemia</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}} ">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <h1 class="nama-logo">WEBDEMIA</h1>
    <div class="container">
        <div class="center-column">
            <img src="{{asset('images\Humaaans Wireframe.png')}}" alt="Gambar" class="gambar-kiri" style="width: 90%; height: 700px; left: 140px; top: 50px; position: absolute; mix-blend-mode: multiply">
        </div>
        <div class="center-column">
            <div style="top: 100px; left: 850px; position: absolute; font-family: 'Roboto', sans serif; font-size: 30px; font-weight: bold; color: #293677">Sign Up</div>
            <button style="top: 160px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 10.7px; font-weight: bold; background-color: #B8DBE9; width: 140px; color: #293677"><i class="bi bi-google"></i> Sign up with Google</button>
            <button style="top: 160px; left: 900px; position: absolute; font-family: 'Roboto', sans serif; font-size: 10.7px; font-weight: bold; background-color: #B8DBE9; width: 140px; color: #293677"><i class="bi bi-facebook"></i> Sign up with Facebook</button>
            <div style="top: 200px; left: 880px; position: absolute; font-family: 'Roboto', sans serif; font-size: 30px; font-weight: bold; color: #293677">Or</div>
            
            <form method="POST" action="{{ route('signup') }}">
            @csrf
                <div style="top: 250px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677">Name</div>
                <input type="text"  name = "name" id="name" style="top: 275px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
             
                <div style="top: 320px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677">First Name</div>
                <input type="text"  name = "first_name" id="first_name" style="top: 345px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
             
                <div style="top: 390px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677; width: 100px">Last Name</div>
                <input type="text"  name = "last_name" id="last_name" style="top: 415px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
             
                <div style="top: 460px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677; width: 100px">Institution</div>
                <input type="text"  name = "institution" id="institution" style="top: 485px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
             
                <div style="top: 530px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677; width: 100px">Email</div>
                <input type="email" name = "email" id="email" style="top: 555px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
             
                <div style="top: 600px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; color: #293677; width: 100px">Password</div>
                <input type="password" name = "password" id="password" style="top: 625px; left: 740px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: normal; color: #293677; width: 300px; background-color:#B8DBE9; border-style: solid; border-width: 2.5px; border-color: #293677">
              
                <button style="top: 670px; left: 790px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px; font-weight: bold; background-color: #293677; width: 200px; color: white" type="submit"><i class="bi bi-plus-square-fill"></i> Create Account</button>
                <div style="top: 720px; left: 760px; position: absolute; font-family: 'Roboto', sans serif; font-size: 18px">Already have an account? <a href="/login" style="color: #293677">Log In</a></div>
            </form>
        </div>
    </div>
</body>
</html>