@extends('admin.layouts.app')


@section('title')
  {{"Dashboard"}}
@endsection

@section('styles-include')
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">


@endsection

@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Dashboard</h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection




@section('content-body')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6">
          <div class="small-box bg-navy">
            <div class="inner">
              <h3>{{count($job)}}</h3>

              <p>Job Orders For the Month</p>
            </div>
            <div class="icon">
              <i style="color:white" class="fa fa-briefcase"></i>
            </div>
            <a href="{{url('schedule')}}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="small-box bg-black">
            <div class="inner">
              <h3>{{count($customer)}}</h3>

              <p>Customers for the month</p>
            </div>
            <div class="icon">
              <i style="color:white" class="fa fa-user-alt"></i>
            </div>
            <a href="{{url('customer')}}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

      </div>

   {{-- DATATABLE --}}
              <div >
                <div class="box box-primary">
                  <label> JOB ORDERS SCHEDULED FOR TODAY</label>
                  <div class="box-body">
                     <table id="job" class="table table-striped table-bordered responsive">
                        <thead>
                          <tr>
                            <th>Customer</th>
                             <th>Vehicle</th>
                             <th>JOB NUMBER</th>
                          </tr>
                       </thead>
                       <tbody>
                       @foreach($orders as $job)
                          <tr>
                            <td>  {{$job->inspects->customer->firstname}} {{$job->inspects->customer->middlename}} {{$job->inspects->customer->lastname}}</td>
                            <td>
                                <li>Plate Number: {{$job->inspects->vehicle->plate_number}}</li>
                                <li>Vehicle Model: {{$job->inspects->vehicle->model->model}}</li>
                            </td>
                            <td>JO000{{$job->id}}</td>
                          </tr>
                        @endforeach
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
		  </div>

    </div>
  </section>

@endsection


@section('scripts-include')

   <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <script>
    
  $(function () {
    $('#jobs').DataTable({
    })
  })

  </script>

@stop