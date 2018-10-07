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

              <p>Job Orders</p>
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

              <p>Customers</p>
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
                    <th class="text-right">Technician</th>
                  </tr>
                </thead>
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