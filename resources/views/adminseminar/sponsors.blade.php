@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sponsors</title>
</head>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Sponsors</h2>
                    </div>
                </div>

                <div style="margin-top: 20px;">
                    <a href="{{url('/addsponsors')}}"><button type="button" class="btn btn-success">+ Add Sponsor</button></a>
                    </div>
                </div>

                <table class="table table-bordered data-table ">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Conference</th>
                            <th class="text-center">Logo</th>
                            <th col="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sponsors as $sponsor)
                            <tr>
                                <td class="text-center">{{ $sponsor->name }}</td>
                                <td class="text-center">{{ $sponsor->conference_name }}</td>
                                <td class="text-center">
                                    @if($sponsor->logo)
                                        <img src="{{ url('storage/' . $sponsor->logo) }}" alt="{{ $sponsor->name }}" width="250">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/editsponsor/' . $sponsor->id) }}"><button class="btn btn-primary"><i class="bi bi-pencil"></i></button></a>
                                    <form action="{{ route('deleteSponsor', $sponsor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
@endsection
  
