<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset ('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- responsive dataformbuilder-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/formbuilder/form-builder.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/formbuilder/form-render.min.css') }}">

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



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MIDSOUTH || INSPECTION FORM</title>

</head>
<body>


<body id="hi">

<center>
        <div class="center header">
          <img src="{{asset ('dist/img/midsouth.png')}}" class="img-circle" width="30" > MIDSOUTH TECHNICAL SERVICES CORPORATION
        </div>
        <h4>BASIC INSPECTION FORM</h4>
</center>


<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h2 class="panel-title">Customer Details</h2></center>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="width:100%">
                            <div class="col-md-6" style="float:left;width:50%">
                               Customer: {{$inspect->customer->firstname}} {{$inspect->customer->middlename}} {{$inspect->customer->lastname}} <br>
                                Address:  {{$inspect->customer->street}} {{$inspect->customer->barangay}} {{$inspect->customer->city}}<br>
                                Phone Number:{{$inspect->customer->contact}} <br>
                                Email:  {{$inspect->customer->email}}<br>
                                <br>
                                <br>

                            </div>
                            <div class="col-md-6" style="float:right:width:50%">
                                Car Brand:{{$inspect->vehicle->model->make}}<br>
                                Car Model:{{$inspect->vehicle->model->model}}<br>
                                Plate Number:{{$inspect->vehicle->plate_number}} <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="form-box"></div>
            </div>            
        </div>
    </div>

	
    <script src="{{ URL::asset('js/inspect.js') }}"></script>
	<!-- jQuery 3 -->
	<script src="{{asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{asset ('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script src="{{ URL::asset('plugins/formbuilder/form-builder.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/formbuilder/form-render.min.js') }}"></script>

    <script src="{{ asset('bower_components/jspdf/jspdf.js') }}"></script>
    <script src="{{ asset('bower_components/jspdf/from_html.js') }}"></script>
    <script src="{{ asset('bower_components/jspdf/split_text_to_size.js') }}"></script>
    <script src="{{ asset('bower_components/jspdf/standard_fonts_metrics.js') }}"></script>	



    @foreach($inspect->inspection as $inspection)
        <script>
            form = JSON.stringify({!! $inspection->remarks!!});
            pdfForm({{$inspection->item->type_id}},"{{$inspection->item->type->type}}",{{$inspection->item_id}},"{{$inspection->item->name}}",form)
        </script>
    @endforeach

</body>


</body>
</html>