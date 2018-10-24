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
              <div class="panel panel-primary" id="panel">
                <div class="panel-body">
                  <div class="row " style="width: 100%">

                    <div class="col-md-4" style="float:left;width:40%">
                      Job Id: <strong>  JO000{{$jobs->id}} </strong> <br>
                      Customer Name:<strong> {{$jobs->inspects->customer->firstname}} {{$jobs->inspects->customer->middlename}} {{$jobs->inspects->customer->lastname}} </strong>  <br>
                      Plate Number:<strong> {{$jobs->inspects->vehicle->plate_number}} </strong>  <br>
                      Start Date: <label for="start" id="start" value="start">{{$jobs->start}}</label>&nbsp;  
                      Start Time: <label for="start" id="startTime" value="startTime">{{$jobs->start_time}}</label>  
                    </div>

                    <div class="col-md-4" style="float:left;width:20%">
                      Car-Brand: <strong>  {{$jobs->inspects->vehicle->model->make}}  </strong>  <br>
                      Car Model: <strong> {{$jobs->inspects->vehicle->model->model}} </strong> <br>
                      Transmission:<strong>{{$jobs->inspects->vehicle->model->transmission_type}}</strong><br>
                      End Date: <label for="end" id="end" value="end">{{$jobs->end}}</label>&nbsp; 
                      End Time: <label for="end" id="endTime" value="endTime">{{$jobs->end_time}}</label>

                    </div>

                    <div class="col-md-4" style="float: left;width: 40% ">
                    Technician(s): </strong>  @foreach($jobs->technicians as $technician)
                      <strong> {{$technician->firstName}} {{$technician->middleName}} {{$technician->lastName}} </strong> <br>
                    @endforeach
                      Service(s):@foreach($jobs->services as $service)
                      <strong>{{$service->name}}</strong> <br>
                      @endforeach
                      
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12" style="float:left;width:100%"><br>
                      <div class="progress active">
                           <div id="stepProgress" class="progress-bar progress-bar-success progress-bar-striped"  role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width:{{$jobs->progressCount}}%;">
                             {{$jobs->progressCount}}%
                          </div>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12" style="width: 50%">
                      <center><button type="button" class="btn btn-success " id="btnStart" data-start="{{$jobs->isStartEnabled}}"><i class="fa fa-play"></i></button>
                    </div>
                    <div class="col-md-12" style="float: left;width: 50%">
                      <center><button type="button" class="btn btn-danger " id="btnStop" data-stop="{{$jobs->isStopEnabled}} "disabled><i class="fa fa-stop"></i></button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div><hr>

          <div class="row">
            <div class="col-md-12">
              <input type="text" name="jobNumber" id="jobNumber" value="{{$jobs->id}}" hidden="">
              <input type="text" name="progressPercent" id="progressPercent" hidden=""value="{{$jobs->progressCount}}">
              <table id="jobs" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Service Description</th>
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
                                <td id="status"></td>
                                <td>   <button type="button" class="btn btn-modal bg-navy btn-sm" id="modal" 
                                  data-id="{{$service->id}}" value="{{$service->id}}" data-toggle="modal" data-target="#steps-{{$service->id}}" disabled>
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
                <div class="modal-body" id="steps-{{$service->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                              <div class="col-md-12">
                                <input type="text" name="stepNumber" id="updateStep" hidden >
                                <input type="text" name="progress" id="stepCount" hidden >
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
                                                    <td><input type="checkbox" name="step" value="{{$service->sequence}}" id="check" class="checkbox" 
                                                        data-stepid="{{$step->id}}"
                                                          ></td>
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
                  <button type="button" id="ajaxSubmit" data-id="{{$service->id}}" class="update btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach 

        </div> 

        <div class="box-footer">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" id="save" class="SAVE btn btn-block btn-primary" disabled>Save</button>
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
                                          </tr>
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
  <script src="{{asset ('js/progress.js')}}"></script>
<script>


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

<script>
  
  $(document).ready(function(){

      $('.SAVE').on('click',function(e){
        var progressCount = $('#progressPercent').val();
        var jobId = $('#jobNumber').val();

        e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


        console.log(jobId,progressCount);

        jQuery.ajax({
            url: "{{ url('/progress/post') }}",
            method: 'post',
            data: {
                    _token : $('meta[name="csrf-token"]').attr('content'), 
                     job_id: jQuery('#jobNumber').val(),
                     progressCount: progressCount,
                     contentType: "application/json; charset=utf-8",
            },
            success: function(result){
               alert('success');

            }
        });


    });
  });

</script>





<script>
  
  $(document).ready(function(){

      $('.update').on('click',function(e){
        var service_id = $(this).data('id');
        var sequence = $('#updateStep').val();
        var jobId = $('#jobNumber').val();

        e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


        console.log(jobId,service_id,sequence);

        jQuery.ajax({
            url: "{{ url('/sequence/post') }}",
            method: 'post',
            data: {
                    _token : $('meta[name="csrf-token"]').attr('content'), 
                     service_id: service_id,
                     job_id: jQuery('#jobNumber').val(),
                     sequence: sequence,
                     contentType: "application/json; charset=utf-8",
            },
            success: function(result){
               alert('success');

            }
        });


    });
  });

</script>

<script>
  
  $(document).ready(function(){

    var jobId = $('#jobNumber').val();
        var d = new Date(); 
        var month = d.getMonth()+1;
        var day = d.getDate();
        var output = d.getFullYear() + '-' +
            ((''+month).length<2 ? '0' : '') + month + '-' +
            ((''+day).length<2 ? '0' : '') + day;

   var start = $('#btnStart').data('start');
   var stop = $('#btnStop').data('stop');         

   if (start==1 && stop==0 ) {
      $('#btnStart').prop("disabled", true);
      $('#btnStop').prop("disabled", false);
      $("#save").prop("disabled",false);
      $('table.table-bordered tr td button').each(function(){
        $(this).prop("disabled",false);
        $("#modal").prop("disabled",false);      

    });
   }
   else if (start == 1 && stop==1){
      $('#btnStop').prop("disabled", true);
      $('#btnStart').prop("disabled", true);
      $("#save").prop("disabled",true);
      $('table.table-bordered tr td button').each(function(){
        $(this).prop("disabled",true);
        $("#modal").prop("disabled",true);      

    });
   }

    $('#btnStart').click(function(e){
          var validate = confirm("Are you sure to start this job?");
              if (validate==true){
                  confirm("The Job has been started");
                          $(this).prop("disabled",true);
                          $("#save").prop("disabled",false);
                          $("#btnStop").prop("disabled",false);
                          $('table.table-bordered tr td button').each(function(){
                              $(this).prop("disabled",false);
                              $("#modal").prop("disabled",false);      

                          });
                          e.preventDefault();
                           $.ajaxSetup({
                              headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                              }
                          });
                        var d = new Date();
                        d = d.toLocaleTimeString().replace(/:\d+ /, ' '); 
                        var jobId = $('#jobNumber').val();
                                jQuery.ajax({
                                              url: "{{ url('startRequest') }}",    
                                              method: "POST",
                                              dataType: 'json',
                                              data: { 
                                                       id: jQuery('#jobNumber').val(),
                                                       start: output,
                                                       start_time:(d),
                                                       _token : $('meta[name="csrf-token"]').attr('content'), 
                                                       contentType: "application/json; charset=utf-8",
                                              },
                                              success: function(data){
                                                alert("SUCCESS");
                                                 
                                  }
                                  });
                                $('#start').val(output).text(output);
                                $('#startTime').val(d).text(d);
              }
              else{
                $(this).prop("disabled",false);
              }     
           
          });

          $('#btnStop').click(function(e){
          var validate = confirm("Are you sure to finish this job?");
            if (validate==true){
                confirm("The Job has been Finished!");
                $("#save").prop("disabled",true); 
                $(this).prop("disabled","disabled");
                    $('table.table-bordered tr td button').each(function(){
                    $("#modal").prop("disabled",true);  
                   

                });

                 e.preventDefault();
                   $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                      }
                  });
                var d = new Date();
                d = d.toLocaleTimeString().replace(/:\d+ /, ' '); 
                var jobId = $('#jobNumber').val();
                        jQuery.ajax({
                                      url: "{{ url('stopRequest') }}",    
                                      method: "POST",
                                      dataType: 'json',
                                      data: { 
                                               id: jQuery('#jobNumber').val(),
                                               start: jQuery('#startTime').val(),
                                               end: output,
                                               end_time:(d),
                                               _token : $('meta[name="csrf-token"]').attr('content'), 
                                               contentType: "application/json; charset=utf-8",
                                      },
                                      success: function(data){
                                        alert("SUCCESS");
                                         
                          }
                          });
                        $('#end').val(output).text(output);
                        $('#endTime').val(d).text(d);
            }
            else{
              $(this).prop("disabled",false);
            }
      });

});

</script>

@endsection
