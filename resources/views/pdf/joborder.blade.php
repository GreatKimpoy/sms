<!DOCTYPE html>
<html lang=en>
	<head>
        <title>MIDSOUTH SERVICES TECH. CORP. | Job Order Report</title>
        <link rel="icon" type="image/png" href="{{asset ('dist/img/midsouth.png')}}" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset ('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    </head>
    <style type="text/css">
        @page{
            margin-top: 1cm;
            margin-bottom: 0.25cm;
        }
        body{
            font-family: "SegoeUI","Sans-serif";
            font-size: 12px;
        }
        .header{
            font-size: 20px!important;
        }
        .page-break {
            page-break-after: always;
        }
        .center{
            text-align: center;
        }
        .col-md-12{
            width: 100%;
        }
        .col-md-6{
            width: 50%;
        }
        .border{
            border: 1px solid black;
        }
        .text-right{
            text-align: right;
        }
        table{
            clear: both;
            border: 1px solid black
        }
        tbody tr{
            border: 1px solid black;
        }
        tr:nth-child(even) {
            background-color: #e6e6e6
        }
        thead th{
            background-color: black;
            color: white;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
        .footerd{
            font-size: 0.8em;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
<body>
	<div class="center header">
            <img src="{{asset ('dist/img/midsouth.png')}}" class="img-circle" width="30" > MIDSOUTH TECHNICAL SERVICES CORPORATION
    </div><br>
    <div style="clear:both"></div>
        <div class="col-md-12 border center">
            JOB ORDER SERVICE
        </div><br>
     <div style="clear:both"></div><br>

     <div class="row">
     	<div class="col-md-12">
     		<div class="panel panel-primary" id="panel">
     			<div class="panel-body">
     				<div class="row" style="width: 100%">

     					<div class="col-md-4" style="padding-left:50px;float:left;width:40%;">
	                      Job Id: <strong> JOB0000{{$job->id}}  </strong> <br>
	                      Customer Name:<strong>{{$job->inspects->customer->firstname}} {{$job->inspects->customer->middlename}} {{$job->inspects->customer->lastname}} </strong>  <br>
	                      Plate Number:<strong>{{$job->inspects->vehicle->plate_number}} </strong>  <br>
	                      Start Date: <label for="start" id="start" value="start">{{$job->start}}</label>&nbsp;  
	                      Start Time: <label for="start" id="startTime" value="startTime">{{$job->start_time}}</label>  
	                    </div>

	                    <div class="col-md-4" style="float:left;width:20%">
	                      Car-Brand: <strong>  {{$job->inspects->vehicle->model->make}}  </strong>  <br>
	                      Car Model: <strong> {{$job->inspects->vehicle->model->model}}  </strong> <br>
	                      Transmission:<strong>{{$job->inspects->vehicle->model->transmission_type}}</strong><br>
	                      End Date: <label for="end" id="end" value="end">{{$job->end}}</label>&nbsp; 
	                      End Time: <label for="end" id="endTime" value="endTime">{{$job->end_time}}</label>
	                    </div>

                        <div class="col-md-4" style="float: left;width: 40% ">
                        Technician(s): </strong>  @foreach($job->technicians as $technician)
                          <strong> {{$technician->firstName}} {{$technician->middleName}} {{$technician->lastName}} </strong> <br>
                        @endforeach
                          Service(s):@foreach($job->services as $service)
                          <strong>{{$service->name}}</strong> <br>
                          @endforeach
                    </div>

     				</div>
     			</div>
     		</div>
     	</div>
     </div>

     </div>
     <div style="clear:both"></div>
        <br>
     <div class="row">
     	<div class="col-md-12">
     		<table width="100%">
     			<thead>
     				<th>Part Number</th> 
                    <th>Description</th> 
     			</thead>
     			<tbody>
     				@foreach($job->services as $service)
                        @foreach($service->parts as $part)
                          <tr>
                              <td>{{$part->number}}</td>
                              <td>{{$part->description}}</td>
                          </tr>
                          @endforeach
                      @endforeach        
                                   
     			</tbody>
     		</table>
     	</div>
     </div>



	<script src="{{asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset ('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>


</body>
</html>