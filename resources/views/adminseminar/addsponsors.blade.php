@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Sponsors</title>
</head>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add Sponsor</h2>
                    </div>
                </div>
                <div class="row">
                    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="name">Name:</label>
                        <input type="text" name="name" required>
                        <br>
                        <label for="conference_id">Conference:</label>
                        <select name="conference_id" required>
                            @foreach($conferences as $conferenceId => $conferenceName)
                                <option value="{{ $conferenceId }}">{{ $conferenceName }}</option>
                            @endforeach
                        </select>
                        <br>

                        <label for="image">Image:</label>
                        <input type="file" name="image" accept="image/*">
                        <br>
                        <button type="submit" class="btn btn-primary">Add Sponsor</button>
                    </form>
                    
                </div>                  
            </div>        
        </div>

    </div>
</body>
@endsection
  
