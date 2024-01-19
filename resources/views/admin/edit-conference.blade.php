@extends('template.admin-template')

@section('content')
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->
        <!-- Add any necessary content header here -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Conference</h2>
                    </div>
                </div>

                <form action="{{ route('updateConference', $conference->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            
                    <div class="form-group">
                        <label for="topic_id">Topic:</label>
                        <select name="topic_id" class="form-control">
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}" {{ $conference->topic_id == $topic->id ? 'selected' : '' }}>
                                    {{ $topic->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label for="schedule_id">Schedule:</label>
                        <select name="schedule_id" class="form-control">
                            @foreach($schedules as $schedule)
                                <option value="{{ $schedule->id }}" {{ $conference->schedule_id == $schedule->id ? 'selected' : '' }}>
                                    {{ $schedule->start_date }} - {{ $schedule->end_date }}
                                </option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label for="name">Conference Name:</label>
                        <input type="text" name="name" value="{{ $conference->name }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="venue">Venue:</label>
                        <input type="text" name="venue" value="{{ $conference->venue }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="url_venue">Venue URL:</label>
                        <input type="text" name="url_venue" value="{{ $conference->url_venue }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="type">Conference Type:</label>
                        <input type="text" name="type" value="{{ $conference->type }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="total_reviewer">Total Reviewers:</label>
                        <input type="number" name="total_reviewer" value="{{ $conference->total_reviewer }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="timezone">Timezone:</label>
                        <input type="text" name="timezone" value="{{ $conference->timezone }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="url">Conference URL:</label>
                        <input type="text" name="url" value="{{ $conference->url }}" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="logo">Logo:</label>
                        <input type="file" name="logo" class="form-control">
                        @if($conference->logo)
                            <img src="{{ url('storage/' . $conference->logo) }}" alt="{{ $conference->name }}" width="250">
                        @else
                            No Image
                        @endif
                    </div>
            
                    <button type="submit" class="btn btn-primary">Update Conference</button>
                </form>
            </div>
        </div>
    </div>
@endsection