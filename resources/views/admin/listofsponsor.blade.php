@extends('template.admin-template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="content-wrapper" style="background-color: #293677">
        <!-- Content Header (Page header) -->

        <div class="content-header"></div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h2>List of Sponsor</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" style="background-color: white; color:black" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="content-header"></div>
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Name of Conference</th>
                        <th>List of Sponsors</th>
                    </thead>
                    <tbody>
                      @php
                        $previousConferenceName = null;
                        $rowspanCount = 1;
                      @endphp
                      @foreach ($sponsors as $key => $sponsor)
                        @if ($key > 0 && $sponsor->name == $sponsors[$key - 1]->name)
                          @php
                            $rowspanCount++;
                          @endphp
                        @else
                          @if ($key > 0)
                            <tr>
                              <td>{{$loop->iteration - $rowspanCount + 1}}</td>
                              <td rowspan="{{$rowspanCount}}">{{$previousConferenceName}}</td>
                              <td>{{$sponsors[$key - 1]->sponsor}}</td>
                              <td class="text-center align-middle">
                                <button class="btn btn-primary">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </td>
                            </tr>
                          @endif
                          @php
                            $rowspanCount = 1;
                          @endphp
                        @endif
                        @php
                          $previousConferenceName = $sponsor->name;
                        @endphp
                      @endforeach
                      {{-- Handle the last row outside the loop --}}
                      <tr>
                        <td>{{$loop->iteration - $rowspanCount + 1}}</td>
                        <td rowspan="{{$rowspanCount}}">{{$previousConferenceName}}</td>
                        <td>{{$sponsors[count($sponsors) - 1]->sponsor}}</td>
                        <td class="text-center align-middle">
                          <button class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
