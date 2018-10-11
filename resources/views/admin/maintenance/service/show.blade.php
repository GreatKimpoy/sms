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
<div class="modal fade" id="modal-default">
              {{ Form::open(array('url'=>'service/save','class'=>'form-horizontal', 'method'=> 'POST')) }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Add Steps</h4>
                    </div>
                    <div class="modal-body">

                      <div class="row">

                        <div class="col-md-6">
                          <label for="stepNumber">Sequence Number</label>
                          <input type="text" 
                          name="sequence"
                          class="form-control"
                          value="">
                        </div>

                        
                        <div class="col-md-6">
                          <label for="partNumber">Number of Minutes</label>
                          <input type="text" 
                          name="time"
                          placeholder = "minutes"
                          class="form-control"
                          value="">
                        </div>

                         <div class="col-md-12">
                          <label for="Description">Description</label>
                            <textarea 
                                    class="form-control align-center" 
                                    placeholder="Description"
                                    maxlength="100" 
                                    name="description"
                                    cols="50"
                                    id="description"
                                    rows="10"></textarea>
                        </div> 

                        <div class="col-md-6" hidden="">
                          <label for="Description" >Service Number</label>
                          <input type="text"
                          name="service"
                          class="form-control"
                          value="{{$service->id}}"> 
                        </div> 

                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                      {{!! form::close() !!}}
                    </div>
                  
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

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
                        <th>Description</th>
                         <th>Time</th>  
                  </tr>
                </thead>
                <tbody>
                              @foreach($service->steps as $step)
                                  <tr>
                                      <td>step
                                        {{$step->sequence}}
                                      </td>
                                     
                                      <td>
                                          {{$step->description}}
                                      </td>

                                       <td>
                                          {{$step->time_consumed}} minutes
                                      </td>
                                  </tr>
                              @endforeach                   
                        </tbody>
                <tfoot>
                  <tr>
                        <th>Step Number</th>
                        <th>Description</th>
                        <th>Time</th>  
                  </tr>
                  </tfoot>
              </table>
            </div>
          </div>

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