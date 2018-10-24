@extends('admin.layouts.app')


@section('title')
  {{"Productivity Report"}}
@endsection


@section('styles-include')
 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Technician Productivity Reports</h3>
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
          {!! Form::open(['url' => 'prodreport','id' => 'prodreport','target' => '_blank']) !!}
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
	            <div class="panel-heading"><h3 class="panel-title">Technician Productivity Report</h3>
	            </div><br>
	            	<button type="submit" class="btn btn-primary btn-md pull-right" style="margin-right: 40px;" id="generatePdf"><i class="glyphicon glyphicon-file"></i> Generate PDF</button>
                {!! Form::close() !!}
	            <br><br>
		            <div class="panel-body">
		                <table id="techTable" class="table table-striped table-bordered responsive" style="width: 100%">
		                    <thead>
		                        <tr>
		                        	<th>Technician ID</th>
		                        	<th>Technician</th>
		                        	<th>Total No. Of Job Orders Done</th>		
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	@foreach($tech as $tech)
		                    	<tr>
	                    			<td>{{$tech->techid}}</td>
	                    			<td>{{$tech->technician}}</td>
	                    			<td>
	                    				{{$tech->serviceNumber}}
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
</section>
@endsection

@section('scripts-include')

  <!-- DataTables -->
  <script src="{{asset ('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset ('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


  <script>


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
  	
  	var tList = $('#techTable').DataTable({
  		"destroy":true,
  		"ajax" : {
            "url": 'prodreport/filter',
            "type": 'POST',
             "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            "data": function ( d ) {
                    return {start:start ,end: end};
                }, 
        },
        "columns": [
            { "data": "techid", },
            { "data": "technician"},
            { "data": "details", 
                render:  function(data,type,row,meta){   
                return row.serviceNumber;
            } 
          },
        ],
  		});
  	});
  	

  </script>



@endsection