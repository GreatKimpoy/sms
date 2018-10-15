@extends('admin.layouts.app')



@section('title')
  {{"Check-Up"}}
@endsection


@section('styles-include')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection



@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Inspection Check-up</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')

<section class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
	          <div class="box box-success">
	            <div class="box-header">
	            @include('notification.notification')
	              <h3 class="box-title">Check-up Inspection</h3>
	              <a type="button" id="new" href="{{ url('checkup/create') }}"  class="btn btn-success btn-sm pull-right">
		            <i class="fa fa-plus"></i> <strong> NEW RECORD </strong>  
		          </a>
	            </div>
	            <div class="box-body">
	              <table id="checkup" class="table table-bordered table-striped table-hover">
	                <thead>
	                  <tr>
	                        <th>Vehicle</th>
	                        <th>Customer</th>
	                        <th>Remarks</th>
	                        <th>Action</th>   
	                  </tr>
	                </thead>
									<tbody>
                        @foreach($inspects as $inspect)
                            <tr>
                                <td>
																		<li><strong>Inspection Number: INS000{{$inspect->id}} </strong></li>
                                    <li>Plate: {{$inspect->plate_number}}</li>
                                
                                    <li>Model: {{$inspect->make}} - {{$inspect->model}} </li>
                        
                                </td>
                                <td>
                                    <li>Name: {{$inspect->firstname}} {{$inspect->middlename}} {{$inspect->lastname}}</li>
                                    <li>Address: {{$inspect->street}} {{$inspect->barangay}} {{$inspect->city}}</li>
                                    <li>Contact No.: {{$inspect->contact}}</li>
                                
                                    <li>Email: {{$inspect->email}}</li>
                                </td>
                                <td>Remark: {{$inspect->additional_remarks}}</td>
                                <td class="text-right">

                                    <a href="javascript: w=window.open('{{url('/checkup/pdf/'.$inspect->inspect_id)}}'); w.print()" target="_blank" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Generate PDF">
                                        <i class="fa fa-file"></i>
                                    </a>
                             
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

	                <tfoot>
	                  <tr>
	                        <th>Vehicle</th>
	                        <th>Customer</th>
	                        <th>Remarks</th>
	                        <th>Action</th>
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

  <script>
    $(function () {
      $('#checkup').DataTable()
     
    })
  </script>

@endsection