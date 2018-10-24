@extends('admin.layouts.app')


@section('title')
  {{"Dashboard"}}
@endsection

@section('styles-include')



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

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Finished Jobs</h3>
            </div>
            <div class="box-body">
              <table id="jobs" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Job</th>
                    <th class="text-center">Customer</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($jobs as $jobs)
                    <tr>
                      <td>
                        <ul>
                          <li>Job Number: JO000{{$jobs->id}}</li>
                          <li>Start date and time {{$jobs->start}} &nbsp; {{$jobs->start_time}} </li>
                          <li>End date and time {{$jobs->end}} &nbsp; {{$jobs->end_time}} </li>
                        </ul>
                      </td>
                      <td>
                        <ul>
                          <li>Name: {{$jobs->inspects->customer->firstname}} {{$jobs->inspects->customer->middlename}} {{$jobs->inspects->customer->lastname}} </li>
                          <li>Address: {{$jobs->inspects->customer->street}} {{$jobs->inspects->customer->barangay}} {{$jobs->inspects->customer->city}} </li>
                          <li>Email: {{$jobs->inspects->customer->email}}</li>
                          <li>Contact: {{$jobs->inspects->customer->contact}}</li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
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