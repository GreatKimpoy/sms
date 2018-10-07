@extends('admin.layouts.app')

@section('title')
  {{"Inspection"}}
@endsection


@section('styles-include')

 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@stop

@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Vehicle Inspection</h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection

@section('content-body')

<section class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="box box-success">
        @include('errors.alert')
            <div class="box-header">
              <h3 class="box-title">Inspection Items</h3>
              <a type="button" id="new" href="{{ url('inspection/create') }}"  class="btn btn-success btn-sm pull-right">
                <i class="fa fa-plus"></i> <strong> NEW RECORD </strong>  
              </a>
            </div>
            <div class="box-body">
              <table id="inspection" class="table table-bordered table-striped table-hover">
                <thead>
                 	<tr> 
	                    <th>Inspection</th>
	                    <th>Item(s)</th>
	                    <th>Actions</th>
	                </tr>
                </thead>

                <tbody>
                @foreach($inspections as $inspection)
                                    <tr>
                                        <td>{{$inspection->type}}</td>
                                        <td>
                                            @foreach($inspection->item as $item)
                                                <li>{{$item->name}}</li>
                                            @endforeach
                                        </td>
                                        <td class="text-right">
                                            <a href="{{url('inspection/'.$inspection->id.'/edit')}}" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Update record">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button onclick="deactivateShow({{$inspection->id}})" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deactivate record">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
             
                </tbody>
                <tfoot>
                  <tr>
                        <th>Inspection</th>
	                    <th>Item(s)</th>
	                    <th >Actions</th>
                  </tr>
                  </tfoot>
              </table>
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
      $('#inspection').DataTable()
     
    })
  </script>

@endsection