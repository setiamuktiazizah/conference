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
                        <h2>List of Partner</h2>
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
                    <thead>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Institution</th>
                        <th>NIB</th>
                        <th colspan="2">Action</th>
                        <th>Send Email</th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)     
                        <tr>
                          <td>{{$user->name}}</td> 
                          <td>{{$user->email}}</td>
                          <td>{{$user->institution}}</td>
                          <td>{{$user->nib}} </td>
                          <div class="text-center align-middle">
                            <form method="POST" action="{{ route('updatePartnerStatus', $user->id) }}">
                                @csrf
                                @method('PUT')

                                <td class="form-group">
                                    <select name="status" class="form-control {{ $user->is_partner ? 'status-accepted' : 'status-rejected' }} ">
                                        <option value="accepted" {{ $user->is_partner ? '' : 'selected' }}>Accepted</option>
                                        <option value="rejected" {{ $user->is_partner ? '' : 'selected' }}>Rejected</option>
                                    </select>
                                </td>
                                <td class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </td>
                            </form>
                        </div>
                          <td class="text-center align-middle">
                            <button class="btn btn-secondary"><i class="bi bi-envelope"></i></button>
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
