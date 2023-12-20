@extends('template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center" style="background-color: #293677">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Payment</h2>
        </div>
      </div>
    </div>
</section>
<section id="content" style="background-color: #293677;">
  <main id="main">
    <div class="container-quotes">
      <div class="row mx-0">
        <div class="form-group col-6">   
            <div class="fieldBlock">
               <label>Set a name for payment type</label>
               <input id="startdate" name="startdate" class="form-control"                                               
                placeholder="Starting Date" required>
          </div>   
       </div>
       <div class="form-group col-6">
           <div class="fieldBlock6">
              <label>Set value</label>
              <input id="enddate" name="enddate" class="form-control" 
              placeholder="End Date" required>
           </div>
       </div>
    </div>
    
    <div class="text-center" style="margin-top: 20px;">
      <a href="{{url('')}}"><button type="button" class="btn btn-primary">Done</button></a>
      </div>
    </div>
    <script type="text/javascript">
    $(function() {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('paperinfo')}}",
          columns: [
              {data: 'name', name: 'name'},
          ]
      });
    });
    </script>
  </main>
</section>
@endsection
