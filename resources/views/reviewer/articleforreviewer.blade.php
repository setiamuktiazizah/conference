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
                        <h2>List of Articles</h2>
                    </div>
                    <div class="col-md-4">
                        <h2>Name of Reviewer: {{$reviewerName}}</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" style="background-color: white; color:black" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="content-header"></div>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Conference Name</th>
                        <th scope="col">Tittle</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>{{$loop-> iteration}}</td>
                            <td>{{$article->ConferenceName}}</td>
                            <td>{{$article->Tittle}}</td>
                            <td>{{$article->Topic}}</td>
                            <td class="text-center">
                                <i class="bi bi-pencil btn-outline-primary" type="button"></i>
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