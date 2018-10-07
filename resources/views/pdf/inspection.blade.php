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



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MIDSOUTH || INSPECTION FORM</title>

</head>
<body>


<body id="hi">

<center>
        <h2>MIDSOUTH</h2>
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
                <div id="formbox"></div>
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