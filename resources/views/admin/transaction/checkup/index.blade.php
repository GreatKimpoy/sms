@extends('admin.layouts.app')



@section('title')
  {{"Check-Up"}}
@endsection


@section('styles-include')
  <!-- DataTables -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
																	<a href="{{url('/checkup/'.$inspect->inspect_id.'/edit')}}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Update record">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript: w=window.open('{{url('/checkup/pdf/'.$inspect->inspect_id)}}'); w.print()" target="_blank" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Generate PDF">
                                        <i class="fa fa-file"></i>
                                    </a>

																		<form action="{{ url('checkup/delete', ['id' => $inspect->id]) }}" method="post">
																		<button type="submit" data-id='` + {{$inspect->id}} + `"' class="btn-remove btn btn-danger"><i class= "fa fa-ban"></i></button>
																		</form>
																		

																		
                                </td>
                            </tr>
                        @endforeach
                
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

	<script>
	  $('#checkup').on('click', '.btn-remove', function(){
        id = $(this).data('id');
        var $this = $(this);
        var loadingText = '<i class="fa fa-circle-o-notch fa-spin"></i> Loading...';
        if ($(this).html() !== loadingText) {
          $this.data('original-text', $(this).html());
          $this.html(loadingText);
        }

        swal({
          title: "Are you sure?",
          text: "You want to delete this Check-up Information",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        
      });

 

	</script>

@endsection