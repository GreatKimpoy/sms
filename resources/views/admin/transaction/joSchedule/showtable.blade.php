@extends('admin.layouts.app')


@section('title')
  {{"Job Order"}}
@endsection


@section('styles-include')

   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

   <style>
    .parts-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .parts-modal .modal {
      background: transparent !important;
    }
  </style>

@endsection



@section('content-header')
  <section class="content-header">
    <div class="container-fluid">
        <h3 class="float-left">Job Order </h3>
    </div><!-- /.container-fluid -->
  </section>
@endsection



@section('content-body')

  <section class="content-header">
    <div class="container-fluid">
      
      <div class="box box-warning box-solid">
        <div class="box-header">
        </div>

        <div class="box-body">

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-primary">
                <div class="panel-body">
                  <div class="row " style="width: 100%">

                    <div class="col-md-4" style="float:left;width:40%">
                      Job Id: <strong> JO000{{$jobs->id}}  </strong> <br>
                      Customer Name:<strong> {{$jobs->inspects->customer->firstname}} {{$jobs->inspects->customer->middlename}} {{$jobs->inspects->customer->lastname}} </strong>  <br>
                      Plate Number:<strong> {{$jobs->inspects->vehicle->plate_number}} </strong>  <br>
                      Start Date: <label for="start" id="start"></label>
                    </div>

                    <div class="col-md-4" style="float:left;width:20%">
                      Car-Brand: <strong> {{$jobs->inspects->vehicle->model->make}} </strong>  <br>
                      Car Model: <strong> {{$jobs->inspects->vehicle->model->model}} </strong> <br>
                      Transmission:<strong>{{$jobs->inspects->vehicle->model->transmission_type}}</strong><br>
                      End Date: <label for="end" id="end"></label>

                    </div>

                    <div class="col-md-4" style="float: left;width: 40% ">
                      Technician(s): </strong>  @foreach($jobs->technicians as $technician)
                      <strong> {{$technician->firstname}} {{$technician->middlename}} {{$technician->lastname}} </strong> <br>
                    @endforeach
                      Service(s):@foreach($jobs->services as $service)
                      <strong>{{$service->name}}</strong> <br>
                      @endforeach
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12" style="float:left;width:100%"><br>
                      
                      <div class="progress active">
                           <div id="stepProgress" class="progress-bar progress-bar-success progress-bar-striped"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 0%;">
                             0% 
                          </div>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12" style="float: left;width: 100%">
                      <button type="button" class="btn btn-success btn-block" id="btnStart"><i id="icons" class="fa fa-play"></i> START</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div><hr>

          <div class="row">
            <div class="col-md-12">

              <table id="services" class="table table-bordered table-striped table-hover">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Service Description</th>
                    <th>Standard TIme</th>
                    <th>Service Progress</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                    <tbody>
                        @foreach($jobs->services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->description}}</td>
                                <td>{{$service->standard_time}}</td>
                                <td id="currentStep"></td>
                                <td id="status"><i style="color:red" class="fa fa-times"></i> Not Completed</td>
                                <td>   <button type="button" class="btn bg-navy btn-sm" id="modal" 
                                  data-id="{{$service->id}}" value="{{$service->id}}" data-toggle="modal" data-target="#steps-{{$service->id}}">
                          <i class="fa fa-eye"></i> <strong></strong> </button> </td>
                            </tr>
                        @endforeach                   
                    </tbody>
              </table>

            </div>
          </div>

   @foreach($jobs->services as $service)
           <div class="modal fade" id="steps-{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">{{$service->name}}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                              <div class="col-md-12">
                                <input type="text" name="stepNumber" id="updateStep" hidden>
                                <input type="text" name="jobNumber" id="jobNumber" value="{{$jobs->id}}" hidden="">
                                <table id="jobs" class="table table-striped table-bordered responsive table-hover">
                                  <thead>
                                    <tr>
                                    
                                       <th>Steps</th>
                                       <th>Description</th>
                                       <th>Standard Time</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                            @foreach($service->steps as $step)                                             
                                                <tr>
                                                      <td id="sequence">{{$step->sequence}}</td>
                                                      <td id="description">{{$step->description}}</td>
                                                      <td id="time_consumed">{{$step->time_consumed}}</td>
                                                    <td><input type="checkbox" name="step" value="{{$step->sequence}}" id="check" class="checkbox" 
                                                        data-stepid="{{$step->sequence}}" data-serviceid="{{$step->service_id}}"></td>
                                                </tr>
                                            @endforeach                      
                                      </tbody>
                                </table>
                              </div>
                            </div>

                      </div>
                    </div>  

                  </div>
                <div class="modal-footer">

                  <button id="ajaxSubmit" class="btn btn-primary" data-dismiss="modal">Save changes</button>

                </div>
              </div>
            </div>
          </div>
  @endforeach 

        </div> 

        <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" id="save" class="btn btn-block btn-primary">Save</button>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">
   
         <div class="box box-success box-solid">
           <div class="box-header">
             <h3 class="box-title">Parts Included</h3>
           </div>


           <div class="box-body">
             <table id="parts" class="table table-bordered table-striped table-hovered">
               <thead>
                 <tr>
                       <th>Part Number</th> 
                       <th>Description</th> 

                 </tr>
               </thead>
               <tbody>
                                @foreach($jobs->services as $service)
                                        @foreach($service->parts as $part)
                                          <tr>
                                              <td>{{$part->number}}</td>
                                              <td>{{$part->description}}</td>
                                            
                                          @endforeach
                                      @endforeach                                         
               </tbody>
               <tfoot>
                 <tr>
                       <th>Part Number</th> 
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
  <script src="{{asset ('js/serviceProgress.js')}}"></script>
  <script src="{{asset ('js/progress.js')}}"></script>


<script>

  $(function () {
    $('#services').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })




  $(function () {
    $('#parts').DataTable({
    })

      $('#jobs').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })

  })

</script>




@stop
