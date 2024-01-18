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
                    <div class="col-md-4">
                        <h2>User Profile</h2>
                    </div>
                </div>
                @foreach ($users as $user)
                <form action="{{ route('admin.guestlist.edit', $user->id) }}" method="post">
                    @csrf

                    <div class="content-header"></div>
                    <h5>Username</h5>
                        <input type="text" name="name" id="name" value="{{$user -> name}}">
                    <h5>First Name</h5>
                        <input type="text" name="first_name" id="first_name" value="{{$user -> first_name}}">  
                    <h5>Last Name</h5>
                        <input type="text" name="last_name" id="last_name" value="{{$user -> last_name}}">
                    <h5>Email</h5>
                        <input type="text" name="email" id="email" value="{{$user -> email}}">
                    <h5>Institution</h5>
                        <input type="text" name="institution" id="institution" value="{{$user -> institution}}">

                    <div>
                        <button type="submit"> Save </button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection