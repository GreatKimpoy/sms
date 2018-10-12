@extends('admin.layouts.app')


@section('title')
  {{"Job Order"}}
@endsection


@section('styles-include')

   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

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
                      Job Id: <strong>   </strong> <br>
                      Customer Name:<strong>  </strong>  <br>
                      Plate Number:<strong>  </strong>  <br>
                      Start Date: <label for="start" id="start" value="start"></label>&nbsp;  
                      Start Time: <label for="start" id="startTime" value="endTime"></label>  
                    </div>

                    <div class="col-md-4" style="float:left;width:20%">
                      Car-Brand: <strong>  </strong>  <br>
                      Car Model: <strong>  </strong> <br>
                      Transmission:<strong></strong><br>
                      End Date: <label for="end" id="end" value="start"></label>&nbsp; 
                      End Time: <label for="end" id="endTime" value="endTime"></label>

                    </div>

                    <div class="col-md-4" style="float: left;width: 40% ">
                      Technician(s): </strong>  
                      <strong> </strong> <br>
                    
                      
                      <strong></strong> <br>
                      
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
                    <div class="col-md-12" style="width: 50%">
                      <center><button type="button" class="btn btn-success " id="btnStart" data-enabled=""><i class="fa fa-play"></i></button>
                    </div>
                    <div class="col-md-12" style="float: left;width: 50%">
                      <center><button type="button" class="btn btn-danger " id="btnStop" ><i class="fa fa-stop" data-enabled=""></i></button>
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
                        
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="currentStep"></td>
                                <td id="status"></td>
                                <td>   <button type="button" class="btn bg-navy btn-sm" id="modal" 
                                  data-id="" value="" data-toggle="modal" data-target="#steps" disabled>
                          <i class="fa fa-eye"></i> <strong></strong> </button> </td>
                            </tr>
                                   
                    </tbody>
              </table>

            </div>
          </div>


           <div class="modal fade" id="steps" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                              <div class="col-md-12">
                                <input type="text" name="stepNumber" id="updateStep" hidden>
                                <input type="text" name="jobNumber" id="jobNumber" value="" hidden="">
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
                                                                                         
                                                <tr>
                                                      <td id="sequence"></td>
                                                      <td id="description"></td>
                                                      <td id="time_consumed"></td>
                                                    <td><input type="checkbox" name="step" value="" id="check" class="checkbox" 
                                                        data-stepid="" data-serviceid=""></td>
                                                </tr>
                                                                  
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
                               
                                          <tr>
                                              <td></td>
                                              <td></td>
                                            
                                                                        
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
  <script src="{{asset ('js/servicesProgress.js')}}"></script>
  <script src="{{asset ('js/progress.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
