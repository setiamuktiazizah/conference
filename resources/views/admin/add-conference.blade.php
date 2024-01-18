@extends('template.admin-template')

@section('content')
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->
        <!-- Add any necessary content header here -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add Conference</h2>
                    </div>
                </div>

                <form action="{{ route('storeConference') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            
                    <div class="form-group">
                        <label for="topic_id">Topic:</label>
                        <select name="topic_id" class="form-control">
                            @foreach($topics as $topic)
                                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label for="schedule_id">Schedule:</label>
                        <select name="schedule_id" class="form-control">
                            @foreach($schedules as $schedule)
                                <option value="{{ $schedule->id }}">
                                    {{ $schedule->start_date }} - {{ $schedule->end_date }}
                                </option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label for="name">Conference Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="venue">Venue:</label>
                        <input type="text" name="venue" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="url_venue">Venue URL:</label>
                        <input type="text" name="url_venue" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="type">Conference Type:</label>
                        <input type="text" name="type" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="total_reviewer">Total Reviewers:</label>
                        <input type="number" name="total_reviewer" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="timezone">Timezone:</label>
                        <input type="text" name="timezone" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="url">Conference URL:</label>
                        <input type="text" name="url" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label for="logo">Logo:</label>
                        <input type="file" name="logo" class="form-control">
                    </div>
            
                    <button type="submit" class="btn btn-success">Add Conference</button>
                </form>

            </div>
        </div>
    </div>
@endsection
