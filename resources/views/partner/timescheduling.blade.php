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
    <h4>Scheduling Conference</h4>
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
        <h6><b>Conference Schedule</b></h6>
        <div class="row justify-content-around">  
          <div class="col-5">
            <input type="datetime-local" class="form-control" placeholder="Start Date">
          </div>
          <div class="col-5">
            <input type="datetime-local" class="form-control" placeholder="End Date">
          </div>
        </div>
        <br>
      
              <br>
              <div class="modal-footer">
                <a href="{{url('addtopic')}}"><button type="button" class="btn btn-primary">Back</button></a>
                <a href="{{url('bundling')}}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                {{-- <a href="{{url('conferenceregistrationdetails')}}"><button type="button" class="btn btn-primary">Save</button></a> --}}
                <button type="submit" class="btn btn-primary">Save</button></a>
              </div>
            </form>
 </div>
</main>
</section>
@endsection