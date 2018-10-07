@extends('admin.layouts.app')


@section('title')
  {{"Job Order Form"}}
@endsection

@section('styles-include')

   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <style>
    .padding{
      padding-left: 10px;
    }

    #times{
      color: red;
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
    <div class="row">
 
      <div class="col-md-4">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
              <h3 class="box-title box-primary">Customer Details</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-9">
                <label>Job Id:  JO000{{$jobs->id}} </label> <br>
                <label>Customer:{{$jobs->inspects->customer->firstname}} {{$jobs->inspects->customer->middlename}} {{$jobs->inspects->customer->lastname}} </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Vehicle Details: </label><br>
                <ul>
                  <li><strong>Model:</strong> {{$jobs->inspects->vehicle->model->model}}</li>
                  <li><strong>Transmission:</strong> {{$jobs->inspects->vehicle->model->transmission_type}} </li>
                  <li><strong>Plate:</strong> {{$jobs->inspects->vehicle->plate_number}} </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9 pull-left">
                <label>Start: {{$jobs->start}} </label>
              </div>     
            </div>
            <div class="row">
              <div class="col-md-9 pull-left">
                <label>End: {{$jobs->end}} </label>
              </div>             
            </div>
             
            </div>
             <div class="row">
              <div class="col-md-12">
                <label><strong class="padding">Technician(s): </strong>  @foreach($jobs->technicians as $technician)
                      <span class="padding"> {{$technician->firstname}} {{$technician->middlename}} {{$technician->lastname}} </span><br>
                    @endforeach
                 </label><br>
                <label><strong class="padding">Service(s):</strong> @foreach($jobs->services as $service)
                      {{$service->name}} <br>
                    @endforeach
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title box-primary">Job Progress Details</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Progress: </label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="progress active">
                      <div id="stepProgress" class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;width: 0%;">
                         0% 
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="text" name="stepNumber" id="updateStep" hidden>
                  <table id="jobs" class="table table-striped table-bordered responsive table-hover">
                    <thead>
                      <tr>
                      
                         <th>Steps</th>
                         <th>Description</th>
                         <th>Standard Time</th>
                         <th>Status</th>
                         <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                              @foreach($jobs->services as $service)
                                @foreach($service->steps as $step)
                                  <tr>
                                      <td>Step {{$step->sequence}}</td>
                                      <td>{{$step->description}}</td>
                                      <td>{{$step->time_consumed}}</td>
                                      <td id="status">></td>
                                      <td><input type="checkbox" name="step" value="" id="check" class="checkbox" 
                                        data-stepid="{{$step->sequence}}"> </td>
                                  </tr>
                                  @endforeach
                              @endforeach                   
                        </tbody>
                  </table>
                </div>
              </div>
              <div class="box-footer">
                <div class="pull-right">
                  <button class="btn btn-sm bg-primary" type="submit" id="saveProgress">Save</button>
                </div>
              </div>
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
  <script src="{{asset ('js/progress.js')}}"></script>

<script>

  $(function () {
    $('#jobs').DataTable({
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
  })

</script>
@stop