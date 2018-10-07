@extends('admin.layouts.app')

@section('title')
  {{"Services"}}
@endsection


@section('styles-include')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">




@endsection



@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Service View</h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">

          <!-- /.box-body -->

           <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Service Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-car-alt margin-r-5"></i> Service</strong>

              <p class="text-muted">
              {{$service->name}}  
              </p>

              <hr>

              <strong><i class="fa fa-car-alt margin-r-5"></i>Description</strong>

              <p class="text-muted">
              {{$service->description}}
              </p>
              
              <hr>

              <strong><i class="fa fa-car-alt margin-r-5"></i>Total time of Sevice</strong>
              <p class="text-muted">
              {{$service->standard_time}}
              </p>

              <hr>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
      </div>

      <div class="col-md-9">
          
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Parts Included</h3>
            </div>
            <div class="box-body">
              <table id="parts" class="table table-bordered table-striped table-hovered">
                <thead>
                  <tr>
                        <th>ID</th>
                        <th>Part Number</th>
                        <th>Description</th>    
                  </tr>
                </thead>
                      <tbody>
                              @foreach($service->parts as $part)
                                  <tr>
                                      <td>{{$part->id}}</td>
                                      <td>{{$part->number}}</td>
                                      <td>{{$part->description}} </td>                 
                                  </tr>
                              @endforeach                   
                        </tbody>
                <tfoot>
                  <tr>
                        <th>ID</th>
                        <th>Part Number</th>
                        <th>Description</th>   
                  </tr>
                  </tfoot>
              </table>
            </div>
          </div>

      </div>


    <div class="col-md-9 pull-right">
 
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Steps Included</h3>
              <div> <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#modal-default">
                 <i class="fa fa-plus"></i> <strong>Add Steps</strong>
              </button>
              </div>
            </div>


            <div class="box-body">
              <table id="steps" class="table table-bordered table-striped table-hovered">
                <thead>
                  <tr>
                        <th>Step Number</th>
                        <th>Time</th>  
                        <th>Description</th>  
                  </tr>
                </thead>
                <tbody>
                              @foreach($service->steps as $step)
                                  <tr>
                                      <td>
                                        {{$step->sequence}}
                                      </td>
                                      <td>
                                          {{$step->time_consumed}} minutes
                                      </td>
                                      <td>
                                          {{$step->description}}
                                      </td>
                                  </tr>
                              @endforeach                   
                        </tbody>
                <tfoot>
                  <tr>
                        <th>Step Number</th>
                        <th>Time</th>   
                        <th>Description</th>  
                  </tr>
                  </tfoot>
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
      $('#parts').DataTable()
   
    })
  </script>

    <script>
    $(function () {
      $('#steps').DataTable()
   
    })
  </script>
@endsection