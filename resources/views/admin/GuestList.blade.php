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
                        <h2>List of Users</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" style="background-color: white; color:black" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="content-header"></div>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $guest)
                        <tr>
                            <td>{{$loop-> iteration}}</td>
                            <td>{{$guest->name}}</td>
                            <td>{{$guest->email}}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.guestlist.GetDataUser', $guest->id) }}">
                                    <button class="btn btn-primary"><i class="bi bi-pencil" type="submit"></i></button>
                                </a>
                                <form action="{{ route('admin.guestlist.hapus', $guest->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection