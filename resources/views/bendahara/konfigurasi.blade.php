@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Configuration</title>
</head>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
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
              
              <br>
              <div class="text-center" style="margin-top: 20px;">
                <a href="{{url('')}}"><button type="button" class="btn btn-secondary">Add another payment type</button></a>
                </div>
              </div>

              <div class="text-center" style="margin-top: 20px;">
                <a href="{{url('')}}"><button type="button" class="btn btn-primary">Done</button></a>
                </div>
              </div>
                
              
              </div>
            </div>
          </div>
        </div>
</body>
@endsection

{{-- @section('content')
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
@endsection --}}
