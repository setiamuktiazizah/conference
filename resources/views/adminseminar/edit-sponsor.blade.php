@extends('template.admin-template')

@section('content')
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->
        <!-- Add any necessary content header here -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Sponsor</h2>
                    </div>
                </div>

                <form action="{{ route('updateSponsor', $sponsor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Add your form fields for editing here -->
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{ $sponsor->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="conference">Conference:</label>
                        <select name="conference_id" class="form-control">
                            @foreach($conferences as $conference)
                                <option value="{{ $conference->id }}" {{ $sponsor->conference_id == $conference->id ? 'selected' : '' }}>
                                    {{ $conference->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="logo">Logo:</label>
                        <input type="file" name="logo" class="form-control">
                        @if($sponsor->logo)
                            <img src="{{ url('storage/' . $sponsor->logo) }}" alt="{{ $sponsor->name }}" width="250">
                        @else
                            No Image
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update Sponsor</button>
                </form>

            </div>
        </div>
    </div>
@endsection
