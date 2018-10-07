@extends('admin.layouts.app')

@section('title')
  {{"Inspect-Edit"}}
@endsection


@section('content-header')
	<section class="content-header">
	  <div class="container-fluid">
	      <h3 class="float-left">Inspection Items </h3>
	  </div><!-- /.container-fluid -->
	</section>
@endsection


@section('content-body')
<section class="content-header">
  <div class="container-fluid">
    <div class="box box-primary col-sm-12 mt-3">
      <div class="box-block pt-3">
        <div class="box-header "><strong> <h4> Vehicle Information Items </h4> <hr> </strong></div>
          <div class="box-body">
                @include('errors.alert')
                @include('admin.maintenance.inspection.editform')

          </div>
      </div>
    </div> 
  </div>
</section>
@endsection
