@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="background-color: #293677">
  <div class="container">
    <div class="row gy-4 d-flex justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2 data-aos="fade-up">WEBDEMIA</h2>
        <h4 data-aos="fade-up">2024</h4>
        <h4>Conference Management System</h4>
      </div>
    </div>
  </div>
</section>
<section id="content" style="background-color: #293677;">
<main id="main">
 <div class="container-quotes">
    <h4>Register Conference</h4>
    <br>
    <div class="row gx-3">
        <div class="col">
        <a href="{{url('registerconference')}}">
        <i class="bi bi-journal-plus"></i>
           Register Conference
          </a>
        </div>
        {{-- <div class="col">
          <a href="{{url('addtopic')}}">
          <i class="bi bi-person-fill-add"></i>
          Add Topic
          </a>
        </div>
        <div class="col">
          <a href="{{url('timescheduling')}}">
          <i class="bi bi-file-arrow-up"></i>
          Time Scheduling
          </a>
        </div> --}}
      </div>
      <br>
      <form action="{{ route('registerconferences.store') }}" method="POST">
      @csrf
              <div class="form-group">
                <label for="name">Name of Conference:</label>
                <input type="text" class="form-control" placeholder="Name of Conference" name="name">
              </div><br>
              {{-- <div class="form-group">
                <label for="topic_id">Topik:</label>
                <input type="number" class="form-control" placeholder="topik" name="topic_id">
              </div><br> --}}
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" placeholder="Name of Location" name="venue">
                <input type="url" class="form-control" placeholder="Location Link" name="url_venue">
              </div><br>
              <div class="form-group">
                <label for="conferenceType">Type of Conference:</label>
                <select id="conferenceType" class="form-control" name="type">
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="url">Link of Conference:</label>
                <input type="url" class="form-control" placeholder="Conference Link" name="url">
              </div><br>
              <div class="form-group">
                <label for="total_reviewer">Total Reviewer</label>
                <input type="number" class="form-control" placeholder="Number of Reviewers" name="total_reviewer">
              </div>
              <br>
              <div class="form-group">
              <label for="topic">Choose the Topic:</label>
              <select name="topic_id" class="form-control">
                  @foreach ($topics as $topic)
                      <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                  @endforeach
              </select>
              </div>
              <br>
              <div class="form-group">
              <label for="topic">Conference Schedule:</label>
              <div class="row justify-content-around">  
                <div class="col-5">
                  <input type="datetime-local" class="form-control" placeholder="Start Date" name="start_date" required>
                </div>
                <div class="col-5">
                  <input type="datetime-local" class="form-control" placeholder="End Date" name="end_date" required>
                </div>
              </div>
              </div>
              <br>
              <div class="modal-footer">
                {{-- <a href="{{url('addtopic')}}"><button type="button" class="btn btn-primary">Next</button></a> --}}
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
      </form>
 </div>
</main>
</section>
@endsection