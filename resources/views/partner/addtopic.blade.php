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
    <h4>Add Topic</h4>
    <br>
    <div class="row gx-3">
        <div class="col">
        <a href="{{url('registerconference')}}">
        <i class="bi bi-journal-plus"></i>
           Register Conference
          </a>
        </div>
        <div class="col">
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
        </div>
    </div>
    <br>
    <form action="{{ route('registerconferences.store') }}" method="POST">
    @csrf
      {{-- <div class="form-group">
          <label for="topic">Choose the Topic</label>
          <select name="topic[]" class="form-control" multiple>
              @foreach ($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
              @endforeach
          </select>
      </div> --}}
      <label for="topic">Choose the Topic:</label>
        <select name="topic" class="form-control">
            @foreach ($topics as $topic)
                <option value="{{ $topic->id }}">{{ $topic->name }}</option>
            @endforeach
        </select>
      <br>
    </form>
      <div class="modal-footer">
          <a href="{{ url('registerconference') }}"><button class="btn btn-primary">Back</button></a>
          <button type="button" class="btn btn-secondary">+ Add Another Topic</button>
          <a href="/timescheduling"><button class="btn btn-primary">Next</button></a>
      </div>
 </div>
</main>
</section>
@endsection