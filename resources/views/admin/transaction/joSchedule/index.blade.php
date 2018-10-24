@extends('admin.layouts.app')


@section('title')
  {{"Schedule"}}
@endsection


@section('styles-include')

 <!--FullCalendar-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{asset ('bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">


   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">



@endsection


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Job Schedule</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection






@section('content-body')

<section class="content-header">
	<div class="container-fluid">

		<div class="row">


      <div class="col-md-3">
        <div id="actionBox" class="box box-primary box-solid">
           <div class="box-header with-border">
              <h3 id="dateSelectedView" class="box-title">{{date('F j, Y')}}</h3>
              <h3 id="dateSelected" class="box-title hidden"></h3>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
          </div>

          <div class="box-body">
              <a type="button" id="new" href="{{ url('/schedule/create') }}"  class="btn btn-success btn-block">
                 <i class="fa fa-plus"></i> <strong> NEW RECORD </strong>  
              </a>
              <button id="viewCalendar" class="btn btn-success btn-block" href="#calendarTab" aria-controls="calendarTab" role="tab" data-toggle="tab">
                  <i class="fa fa-exchange-alt"></i> Calendar View
              </button>
            <button id="viewTable" class="btn btn-primary btn-block" href="#tabularTab" aria-controls="tabularTab" role="tab" data-toggle="tab">
              <i class="fa fa-exchange-alt"></i> Tabular View
              </button>
          </div>
        </div>
      </div>


			<div class="col-md-9">
		      <div class="tab-content">
            {{-- CALENDAR--}}
            <div role="tabpanel" class="tab-pane active" id="calendarTab">
                <div class="box box-primary">
                    <div class="box-body">
                             {!! $calendar->calendar() !!}
                    </div>
                </div>
            </div>
              {{-- DATATABLE --}}
              <div role = "tabpanel" class="tab-pane fade" id="tabularTab">
                <div class="box box-primary">
                  <div class="box-body">
                     <table id="job" class="table table-striped table-bordered responsive">
                        <thead>
                          <tr>
                            <th>Start Date</th>
                             <th>Vehicle</th>
                             <th>Customer</th>
                             <th class="text-right">Action</th>
                          </tr>
                       </thead>
                       <tbody>
                       @foreach($jobs as $job)
                          <tr>
                            <td>{{$job->start}}</td>
                            <td>
                                <li>Plate Number: {{$job->inspects->vehicle->plate_number}}</li>
                                <li>Vehicle Model: {{$job->inspects->vehicle->model->model}}</li>
                                
                            </td>
                            <td>
                                {{$job->inspects->customer->firstname}} {{$job->inspects->customer->middlename}} {{$job->inspects->customer->lastname}}
                            </td>
                            <td class="text-right">
                              <a href="{{url('schedule/'.$job->id)}}" type="button" class="btn bg-navy btn-sm"   data-toggle="tooltip" data-placement="top" title="Update record">
                                <i class="fa fa-eye"></i>
                              </a>
                               <a href="javascript: w=window.open('{{url('/schedule/pdf/'.$job->id)}}'); w.print()" target="_blank" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Generate PDF">
                                        <i class="fa fa-file"></i>
                              </a>
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


		</div>
	</div>
</section>


@endsection




@section('scripts-include')


<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar->script() !!}

  <!-- DataTables -->
<script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset ('js/calendar.js')}}"></script>
  

<script>
	

  $(function(){
         $('.select2').select2();

    })


$(function () {
      $('#job').DataTable()
     
    });



</script>



<script>
  

  $("#viewTable").on('click', function () {
    $("#tabularTab").show();
    $("#calendarTab").hide();
});

$("#viewCalendar").on('click', function () {
    $("#tabularTab").hide();
    $("#calendarTab").show();
});

</script>



  



@endsection
