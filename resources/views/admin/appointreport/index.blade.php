@extends('admin.layouts.app')


@section('title')
  {{"Appointment Report"}}
@endsection

@section('styles-include')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Appointment Reports</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary box-solid col-sm-12 mt-3">
      <div class="box-block pt-3">
      	<div class="box-header">
         <h4 class="box-title"> Reports as of now <b id="dateLabel">{{$dateEnd}}</b> </h4> 
        </div><br>
        <div class="box-body">

        	<div class="row">
        		<div class="col-md-5">
        			<label for="start">From Date:</label>
        			<input type="date" name="start" id="startDate" class="form-control" required>
        		</div>
        		<div class="col-md-5">
        			<label for="end">To Date:</label>
        			<input type="date" name="end" id="endDate" class="form-control" required>
        		</div><br>
	        		<div class="col-md-2">
	        			<button type="button" class="btn btn-primary btn-md" style="margin-top: 5px;" id="search"><i class="fa fa-search"></i></button>
	        		</div>
        	</div>
        	<br><br>

        	<div class="panel panel-primary pan1 hide">
	            <div class="panel-heading"><h3 class="panel-title">Appointment Report</h3>
	            </div><br>
	            	<a href="javascript: w=window.open('{{url('appointreport/pdf')}}'); w.print()" type="button" class="btn btn-md btn-primary pull-right" style="margin-right: 40px;" id="generatePDF"><i class="glyphicon glyphicon-file" target="_blank"></i> Generate PDF</a>
	            <br><br>
		            <div class="panel-body">
		                <table id="appointTable" class="table table-striped table-bordered responsive" style="width: 100%">
		                    <thead>
		                        <tr>
		                            <th width="5%">#</th>
		                            <th>Customer</th>
		                            <th>Appointment Date</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                      		@foreach($appointment as $appoint)
		                      			<tr>
		                      				<td>{{$loop->index+1}}</td>
		                      				<td>{{$appoint->customer}}</td>
		                      				<td>{{$appoint->AppointmentDate}}</td>
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

  	$('#generatePDF').click(function(){

  		var validate = confirm("Are you sure to print this? ");
              if (validate==true){
              		alert('Success');
              	}
              else {
              		alert('Thank You!');
              }

  	});

  	$(document).on('click','#search', function (){
  		var start = $('#startDate').val();
  		var end = $('#endDate').val();
  		console.log(start, end);
  		$('.pan1').removeClass('hide');

  	$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
    });
  	
  	var appoint = $('#appointTable').DataTable({
  		"destroy":true,
  		"ajax" : {
            "url": 'appointreport/filter',
            "type": 'POST',
             "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            "data": function ( d ) {
                    return {start:start ,end: end};
                }, 
        },
        "columns": [
            { "data": "id"},
            { "data": "customer"},
          	{ "data": "AppointmentDate"},	

        ],

  		});
  	});
  	

  </script>



@endsection